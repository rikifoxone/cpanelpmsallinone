#!/bin/sh
# SCRIPT: install.sh
# PURPOSE: Install the PMS plugin into cPanel
# AUTHOR: Riccardo Volpone <riccardo.volpone@gmail.com
#
clear
echo "Installing PMS"

# Create the directory for the plugin
mkdir -p /usr/local/cpanel/base/frontend/jupiter/pmsallinone

# Get the plugin files from Github
# curl -s https://github.com/rikifoxone/cpanelpmsallinone/blob/main/is_files.tar.gz > is_files.tar.gz

# Uncompress the archive
# tar xzf is_files.tar.gz

# Move files to /usr/local/cpanel/base/frontend/paper_lantern/infection_scanner directory
mv /root/cpanelpmsallinone/pmsallinone.live.pl /usr/local/cpanel/base/frontend/jupiter/pmsallinone
mv /root/cpanelpmsallinone/pmsallinone.tar.gz /usr/local/cpanel/base/frontend/jupiter/pmsallinone

# Install the plugin (which also places the png image in the proper location)
/usr/local/cpanel/scripts/install_plugin /usr/local/cpanel/base/frontend/jupiter/pmsallinone/pmsallinone.tar.gz

echo "Installation is complete!"

