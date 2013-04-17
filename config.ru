require 'rack'
require 'rack-legacy'
require 'rack-rewrite'

use Rack::Rewrite do
  rewrite %r{(.*/$)}, lambda {|match, rack_env|
    if File.exists?(File.join(Dir.getwd, rack_env['PATH_INFO'], "index.html"))
      rack_env['PATH_INFO'] + "index.html"
    else
      rack_env['PATH_INFO']
    end
  }
end

use Rack::Legacy::Php, Dir.getwd
run Rack::File.new Dir.getwd
