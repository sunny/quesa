task default: :compile

desc 'Compile all the things'
task compile: [:css, :js]

desc 'Compile CSS'
task :css do
  sh 'bundle exec compass compile --output-style compressed --force ' \
     '--sass-dir assets/css ' \
     '--css-dir assets/css ' \
     '--images-dir assets/img'
end

desc 'Compile JS'
task :js do
  sh 'bundle exec coffee --compile assets/js'
end

desc 'Deploy using rsync'
task deploy: :compile do
  sh 'git push'
  sh 'rsync -avz --delete --exclude=.sass-cache --exclude=.git ' \
     './ sunfox.ooklxc:quesapelorio.com/'
end
