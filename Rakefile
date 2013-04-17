task :default => [:css, :js]

task :css do
  sh 'compass compile'
end

task :js do
  sh 'coffee --compile assets/js'
end

task :deploy do
  sh "git status"
  sh "git push"
  sh "rsync -avz --delete --exclude=.sass-cache --exclude=.git ./ bearnaise.net:quesapelorio.com/"
end
