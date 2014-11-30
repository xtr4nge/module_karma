<?
$mod_name="karma";
$mod_version="1.1";
$mod_path="/usr/share/FruityWifi/www/modules/karma";
$mod_logs="/usr/share/FruityWifi/logs/karma.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="disabled";
$mod_panel="show";
$mod_isup="/usr/share/FruityWifi/www/modules/karma/includes/hostapd_cli -p /var/run/hostapd-phy0 karma_get_state | tail -1 | grep ENABLED";
$mod_alias="Karma";
# EXEC
$bin_danger = "/usr/share/FruityWifi/bin/danger";
$bin_sudo = "/usr/bin/sudo";
$bin_sh = "/bin/sh";
$bin_echo = "/bin/echo";
$bin_grep = "/usr/bin/ngrep";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
$bin_route = "/sbin/route";
$bin_perl = "/usr/bin/perl";
?>