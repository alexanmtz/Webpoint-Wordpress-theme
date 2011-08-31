set :application, "webpoint"
set :repository,  "git@github.com:alexanmtz/Webpoint-Wordpress-theme.git"

set :scm, "git"
set :branch, "master"
set :user, "alexmagno"
set :deploy_via, :copy
set :use_sudo, false
set :host, "alexandremagno.net"
set :deploy_to,    "#{application}/deploy"
set :target_dir, "#{host}/blog/wp-content/themes/#{application}"
set :target_test_dir, "#{host}/blogantigo/wp-content/themes/#{application}"

# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "alexandremagno.net"                          # Your HTTP server, Apache/etc
#role :app, "your app-server here"                          # This may be the same as your `Web` server
#role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
#role :db,  "your slave db-server here"

# if you're still using the script/reaper helper you will need
# these http://github.com/rails/irs_process_scripts

# If you are using Passenger mod_rails uncomment this:
# namespace :deploy do
#   task :start do ; end
#   task :stop do ; end
#   task :restart, :roles => :app, :except => { :no_release => true } do
#     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
#   end
# end

namespace :deploy do
  task :default do
     prod
  end

  task :prod do
    puts "creating the application directory..."
    run "mkdir -p #{target_dir}"
    puts "copying last release..."

    run "cp -r #{latest_release}/* #{target_dir}"
    puts "completed!"
  end

  task :testing do
    puts "creating the application directory..."
    run "mkdir -p #{target_test_dir}"
    puts "copying last release..."

    run "cp -r #{latest_release}/* #{target_test_dir}"
    puts "completed!"
  end
end