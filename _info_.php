<?
$mod_name="karma";
$mod_version="1.6";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="enabled";
$mod_panel="show";
$mod_type="service";
$mod_alias="Karma";

# EXEC
$bin_danger = "/usr/share/fruitywifi/bin/danger";
$bin_sudo = "/usr/bin/sudo";
$bin_hostapd = "$mod_path/includes/hostapd";
$bin_hostapd_cli = "$mod_path/includes/hostapd_cli";
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

# ISUP
//$mod_isup="/usr/share/FruityWifi/www/modules/karma/includes/hostapd_cli -p /var/run/hostapd-phy0 karma_get_state | tail -1 | grep EN";
//$mod_isup="$bin_danger \"$mod_path/includes/hostapd_cli -p /var/run/hostapd-phy0 karma_get_state | grep 'ENABLE'\"";
$mod_isup="$bin_sudo $mod_path/includes/hostapd_cli -p /var/run/hostapd karma_get_state | grep 'ENABLE'";
?>
