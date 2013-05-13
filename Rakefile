task :default => :compile

desc "Compile all the things"
task :compile => [:css, :js]

desc "Compile CSS"
task :css do
  sh 'compass compile --output-style compressed --force'
end

desc "Compile JS"
task :js do
  sh 'coffee --compile assets/js'
  # sh "r.js -o assets/js/app.build.js"
end

desc "Deploy to bearnaise.net using rsync"
task :deploy => :compile do
  sh "git push"
  sh "rsync -avz --delete --exclude=.sass-cache --exclude=.git ./ bearnaise.net:quesapelorio.com/"
end
