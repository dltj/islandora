echo "Installing Sync."

HOME_DIR=$1

cd "$HOME_DIR/islandora/camel/sync"
mvn install
cp target/sync-0.0-SNAPSHOT.war /var/lib/tomcat7/webapps/sync.war
chown tomcat7:tomcat7 /var/lib/tomcat7/webapps/sync.war
service tomcat7 restart
