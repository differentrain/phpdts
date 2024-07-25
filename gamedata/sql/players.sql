--
-- 表的结构 `bra_players`
-- 储存角色数据的激活信息，包括PC和NPC。
--

DROP TABLE IF EXISTS bra_players;
CREATE TABLE bra_players (
  pid smallint unsigned NOT NULL auto_increment,
  type tinyint NOT NULL default '0',
  name char(40) not null default '',
  pass char(32) NOT NULL default '',
  ip char(15) NOT NULL DEFAULT '',
  gd char(1) NOT NULL default 'm',
  race char(32) NOT NULL default '0',
  sNo smallint unsigned NOT NULL default '0',
  icon varchar(255) NOT NULL DEFAULT '0',
  club tinyint unsigned NOT NULL default '0',
  endtime int(10) unsigned NOT NULL default '0',
  validtime int(10) unsigned NOT NULL default '0',
  deathtime int(10) unsigned NOT NULL default '0',
  cmdnum int unsigned NOT NULL default '0',
  nick text NOT NULL default '',
  nicks text NOT NULL default '',
  skillpoint smallint unsigned NOT NULL default '0',
  skills smallint unsigned NOT NULL default '0',
  cdsec int(10) unsigned NOT NULL default '0',
  cdmsec smallint(3) unsigned NOT NULL default '0',
  cdtime int(10) unsigned NOT NULL DEFAULT '0',
  horizon tinyint unsigned NOT NULL default '0',
  action char(12) NOT NULL default '',
  bid smallint unsigned NOT NULL default '0',
  hp int(10) unsigned NOT NULL DEFAULT '0',
  mhp int(10) unsigned NOT NULL DEFAULT '0',
  sp int(10) unsigned NOT NULL DEFAULT '0',
  msp int(10) unsigned NOT NULL DEFAULT '0',
  ss int(10) unsigned NOT NULL DEFAULT '0',
  mss int(10) unsigned NOT NULL DEFAULT '0',
  att int(10) unsigned NOT NULL DEFAULT '0',
  def int(10) unsigned NOT NULL DEFAULT '0',
  pgroup tinyint unsigned NOT NULL DEFAULT '0',
  pls tinyint unsigned NOT NULL default '0',
  lvl tinyint unsigned NOT NULL default '0',
  `exp` smallint unsigned NOT NULL default '0',
  money int(10) unsigned NOT NULL DEFAULT '0',
  rp int(10) NOT NULL DEFAULT '0',
  `inf` char(10) not null default '',
  rage tinyint unsigned NOT NULL default '0',
  pose tinyint(1) unsigned NOT NULL default '0',
  tactic tinyint(1) unsigned NOT NULL default '0',
  killnum smallint unsigned NOT NULL default '0',
  state tinyint unsigned NOT NULL default '0',
  `wp` smallint unsigned not null default '0',
  `wk` smallint unsigned not null default '0',
  `wg` smallint unsigned not null default '0',
  `wc` smallint unsigned not null default '0',
  `wd` smallint unsigned not null default '0',
  `wf` smallint unsigned not null default '0',
  `teamID` char(40) not null default '',
  `teamPass` char(40) not null default '',
  `teamIcon` smallint unsigned NOT NULL default '0',
  getitem text NOT NULL default '',
  itembag text NOT NULL default '',
  itmnum smallint unsigned NOT NULL default '0',
  itmnumlimit smallint unsigned NOT NULL default '0',
  wep char(30) NOT NULL default '',
  wepk char(40) not null default '',
  wepe int(10) unsigned NOT NULL DEFAULT '0',
  weps char(10) not null default '0',
  wepsk char(40) not null default '',
  weppara text not null,
  wep2 char(30) NOT NULL default '',
  wep2k char(40) not null default '',
  wep2e int(10) unsigned NOT NULL DEFAULT '0',
  wep2s char(10) not null default '0',
  wep2sk char(40) not null default '',
  wep2para text not null,
  arb char(30) NOT NULL default '',
  arbk char(40) not null default '',
  arbe int(10) unsigned NOT NULL DEFAULT '0',
  arbs char(10) not null default '0',
  arbsk char(40) not null default '',
  arbpara text not null,
  arh char(30) NOT NULL default '',
  arhk char(40) not null default '',
  arhe int(10) unsigned NOT NULL DEFAULT '0',
  arhs char(10) not null default '0',
  arhsk char(40) not null default '',
  arhpara text not null,
  ara char(30) NOT NULL default '',
  arak char(40) not null default '',
  arae int(10) unsigned NOT NULL DEFAULT '0',
  aras char(10) not null default '0',
  arask char(40) not null default '',
  arapara text not null,
  arf char(30) NOT NULL default '',
  arfk char(40) not null default '',
  arfe int(10) unsigned NOT NULL DEFAULT '0',
  arfs char(10) not null default '0',
  arfsk char(40) not null default '',
  arfpara text not null,
  art char(30) NOT NULL default '',
  artk char(40) not null default '',
  arte int(10) unsigned NOT NULL DEFAULT '0',
  arts char(10) not null default '0',
  artsk char(40) not null default '',
  artpara text not null,
  itm0 char(30) NOT NULL default '',
  itmk0 char(40) not null default '',
  itme0 int(10) unsigned NOT NULL DEFAULT '0',
  itms0 char(10) not null default '0',
  itmsk0 char(40) not null default '',
  itmpara0 text not null,
  itm1 char(30) NOT NULL default '',
  itmk1 char(40) not null default '',
  itme1 int(10) unsigned NOT NULL DEFAULT '0',
  itms1 char(10) not null default '0',
  itmsk1 char(40) not null default '',
  itmpara1 text not null,
  itm2 char(30) NOT NULL default '',
  itmk2 char(40) not null default '',
  itme2 int(10) unsigned NOT NULL DEFAULT '0',
  itms2 char(10) not null default '0',
  itmsk2 char(40) not null default '',
  itmpara2 text not null,
  itm3 char(30) NOT NULL default '',
  itmk3 char(40) not null default '',
  itme3 int(10) unsigned NOT NULL DEFAULT '0',
  itms3 char(10) not null default '0',
  itmsk3 char(40) not null default '',
  itmpara3 text not null,
  itm4 char(30) NOT NULL default '',
  itmk4 char(40) not null default '',
  itme4 int(10) unsigned NOT NULL DEFAULT '0',
  itms4 char(10) not null default '0',
  itmsk4 char(40) not null default '',
  itmpara4 text not null,
  itm5 char(30) NOT NULL default '',
  itmk5 char(40) not null default '',
  itme5 int(10) unsigned NOT NULL DEFAULT '0',
  itms5 char(10) not null default '0',
  itmsk5 char(40) not null default '',
  itmpara5 text not null,
  itm6 char(30) NOT NULL default '',
  itmk6 char(40) not null default '',
  itme6 int(10) unsigned NOT NULL DEFAULT '0',
  itms6 char(10) not null default '0',
  itmsk6 char(40) not null default '',
  itmpara6 text not null,
  flare int(10) NOT NULL default '0',
  dcloak int(10) NOT NULL default '0',
  auraa int(10) NOT NULL default '0',
  aurab int(10) NOT NULL default '0',
  aurac int(10) NOT NULL default '0',
  aurad int(10) NOT NULL default '0',
  aurae int(10) NOT NULL default '0',
  souls int(10) NOT NULL default '0',
  debuffa int(10) NOT NULL default '0',
  debuffb int(10) NOT NULL default '0',
  debuffc int(10) NOT NULL default '0',
  vcode char(1) not null default '',
  statusa int(10) NOT NULL default '0',
  statusb int(10) NOT NULL default '0',
  statusc int(10) NOT NULL default '0',
  statusd int(10) NOT NULL default '0',
  statuse int(10) NOT NULL default '0',
  clbpara text NOT NULL,
  clbstatusa int(10) NOT NULL default '0',
  clbstatusb int(10) NOT NULL default '0',
  clbstatusc int(10) NOT NULL default '0',
  clbstatusd int(10) NOT NULL default '0',
  clbstatuse int(10) NOT NULL default '0',
  nikstatusa int(10) NOT NULL default '0',
  nikstatusb int(10) NOT NULL default '0',
  nikstatusc int(10) NOT NULL default '0',
  nikstatusd int(10) NOT NULL default '0',
  nikstatuse int(10) NOT NULL default '0',
  element0 int(10) unsigned NOT NULL DEFAULT '0',
  element1 int(10) unsigned NOT NULL DEFAULT '0',
  element2 int(10) unsigned NOT NULL DEFAULT '0',
  element3 int(10) unsigned NOT NULL DEFAULT '0',
  element4 int(10) unsigned NOT NULL DEFAULT '0',
  element5 int(10) unsigned NOT NULL DEFAULT '0',

  PRIMARY KEY  (pid),
  INDEX TYPE (type, sNo),
  INDEX NAME (name, type)
	
) ENGINE=MyISAM;



