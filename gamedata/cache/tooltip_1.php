<?php
if(!defined('IN_GAME')) exit('Access Denied');

$posetips = Array(
	0 => "最普通的姿态",
	1 => "以备战为目的，略微提升角色发现率。极大幅提升攻击力、防御力",
	2 => "以追猎敌人为目的，大幅提升角色先制率",
	3 => "以寻找物品为目的，提升道具发现率。中幅降低攻击力、防御力",
	4 => "以先发制人为目的，提升角色发现率以及先手率。中幅提升攻击力，但是会大幅降低防御力",
	5 => "以自我治疗为目的，提升恢复能力。但其他数值大幅恶化",
	6 => "以快速发现敌人为目的，极大幅提升角色遇敌率，略微提升先制率，极大幅降低防御力",
	7 => "以哨戒为目的，初次受到攻击时不会反击。但在受到攻击后会变换作战姿态",
	8 => "切换战术界面的感知模式，只会遭遇同处于✧灵子姿态✧的对象，同时不会被处于其他姿态的对象发现。\r脱离灵子姿态后，需要等待1分钟后才可重新进入。",
);
$tactips = Array(
	0 => "没有策略就是你的策略",
	1 => "",
	2 => "随时准备防御敌方攻击和陷阱的策略。会大幅提升防御力",
	3 => "随时准备反击敌人攻击的策略。会提升先制率、攻击力，但中幅降低防御力",
	4 => "试图回避敌人、陷阱和禁区的策略。中幅降低攻击力、防御力",
);

$tps_names = Array
(
	# 用于记录一些内容重复但来源不同的描述
	# 不能改善性能，但是可以保护视力与腱鞘？……大概吧
	#0:巫师物品
	0 => Array('class'=>'spitem2', 'title'=>"为游戏做出过贡献的巫师的装备。",),
	#1:福袋SR
	1 => Array('class'=>'neonorange', 'title'=>"从幸运礼物福袋中以二成几率左右能开出的强力装备。",),
	#2:福袋SSR
	2 => Array('class'=>'rainbow', 'title'=>"从幸运礼物福袋中以极低几率左右能开出的强力装备。",),
	#3:钉
	3 => Array('title'=>"为手中名字带有“棍棒”的钝器打钉子，以增加效果值"),
	#4:磨刀石
	4 => Array('title'=>"让手中锐器更加锋利，以增加效果值"),
	#5:针线包
	5 => Array('title'=>"增加装备着的身体防具的效果值"),
	#99: ???
	99 => Array('title'=>"……这、这是什么？！"),
);

$tps_name = Array
(
	# 强化道具
	'钉' => 3, '钢钉' => 3, '艾莲娜的圣钉' => 3, '埃克法-冰凌-钉' => 3,
	'磨刀石' => 4, '黑磨刀石' => 4, '沉默磨刀石' => 4, '贤者之磨刀石' => 4, '埃克法-融炼-磨刀石' => 4,
	'针线包' => 5,
	# 特殊道具
	'武器师安雅的奖赏' => Array('title'=>"强化手中武器的效果值、耐久值，或者将类型转变为你更擅长的系别"),
	'凸眼鱼' => Array('title'=>"使用后可以销毁整个战场现有的尸体"),
	'鱼眼凸' => Array('title'=>"使用后可以将整个战场的尸体吸到你的位置，但后果自负！"),
	'小叶子的妙妙箱' => Array('title'=>"可以从这个箱子中翻出各种各样能作为陷阱的东西，但不要太贪心，否则后果自负！"),
	'杏仁豆腐的ID卡' => Array('title'=>"连斗后使用可以让全场NPC消失并进入『死斗阶段』"),
	'水果刀' => Array('title'=>"可以切水果。如果不会用可能会切到自己"),
	'探测器电池' => Array('title'=>"使用后可以为探测仪器供电"),
	'★闪耀护符★' => Array('class'=>'minirainbow', 'title'=>"拥有它之后，据说触发某个特定事件的概率会大幅度上升。"),
	'【歌单】红暮' => Array('class'=>'ltcrimson', 'title'=>"保存着劲爆摇滚乐的音乐播放器，让你能联想到红暮的强大。"),
	'【歌单】蓝凝' => Array('class'=>'ltazure', 'title'=>"保存着八九十年代风格迷幻流行人声音乐的音乐播放器，让你能联想到蓝凝的可爱。"),
	'【歌单】芙蓉' => Array('class'=>'tmagenta', 'title'=>"保存着李斯特作品的音乐播放器，让你能联想到芙蓉的忠心。"),
	'【歌单】丁香' => Array('class'=>'clan', 'title'=>"保存着明快的纯音乐的音乐播放器，让你能联想到丁香的温柔。"),
	'【歌单】冰炎' => Array('class'=>'orange', 'title'=>"保存着风格似乎来源自某著名动作游戏系列BGM的音乐播放器，让你能联想到冰炎的努力。"),
	'【歌单】小兔子警报！' => Array('class'=>'lime', 'title'=>"保存着可爱的儿歌的……什么东西。"),
	'【歌单】瑞克·拉玛尔' => Array('class'=>'minirainbow', 'title'=>"保存着劲爆飙车BGM的音乐播放器，让你可以以随机数培养自己。警告：一旦使用无法恢复！"),
	'人生重来炮' => Array('title'=>"一个可以部署的马戏团大炮，可以将你自己发射出去，让你焕然一新！"),
	'善良之刃' => Array('title'=>"一把有着羽毛装饰的匕首，可以消耗200点怒气，尝试自裁。"),
	# 怪东西
	'■DeathNote■' => 99, '奇怪的按钮' => 99, '『S.C.R.A.P』' => 99,
	# 电掣装置
	'魔法蜂针' => Array('class'=>'spitem', 'title'=>"这个武器一定会对敌人造成350点伤害，但对防御非常高的敌人除外。",),
	'临摹装置' => Array('class'=>'spitem', 'title'=>"这个武器在主动攻击对手时，将可以复制对手的武器。注意：对手武器数值太高时会失败，后果自负！",),
	# 巫师物品
	'■胶冻の巴雷特■' => 0,'■胶冻的风衣■' => 0,'■胶冻的兜帽■' => 0,'■胶冻的跑鞋■' => 0,'■胶冻的手套■' => 0,'■胶冻的吊坠■' => 0,
	'■便携式火力平台■' => 0,'■Type3防弹插板■' => 0,'■VFL 6-24×56光学瞄具■' => 0,'■IOP T4外骨骼■' => 0,'■热光学迷彩披风■' => 0,'■遗留的武器库■' => 0,
	'【工作用数位板】' => 0,'【学园针织罩衫】' => 0,'【鱼形发卡】' => 0,'【学园制服鞋】' => 0,'【工作用数位笔】' => 0,'【布艺猫咪挂件】' => 0,
	# 福袋SR
	'「信仰之山」' => 1,'「间断的噩梦」' => 1,'「运钝根的捕物帐」' => 1,'「喧嚣叙事曲」' => 1,'「升天」' => 1,
	'「曳光」' => 1,'「人生重来箱」' => 1,'「菁英宅之怒」' => 1,'闭锁世界的冥神 Ｌ5' => 1,'铁兽式强袭机动兵装改牛头伯劳2 Ｌ5' => 1,
	'防火龙·暗流体 Ｌ5' => 1,'前托枪管龙 Ｌ5' => 1,'电子界到临者＠火灵天星 Ｌ6' => 1,'召命之神弓-阿波罗萨 Ｌ4' => 1,'「活跃迎春曲」' => 1,'「飘落」' => 1,'「明动」' => 1,
	'「正午高阳」' => 1,'神灭兵器－天霆号扼宙斯 ☆12' => 1,'「碧海船歌」' => 1,'「翼展」' => 1,'「安谧」' => 1,
	'「午前许愿」' => 1,'神之圣剑' => 1,'「金霜协奏曲」'=>1,'「龙怒」' => 1,'「升天」' => 1,'「宁静」' => 1,'「清晨恩典」' => 1,'神之棍棒' => 1,
	# 福袋SSR
	'随机数之神的棍棒' => 2,'随机数之神的圣剑' => 2,'随机数之神的泪水' => 2,
	'随机数之神的神力' => 2,'随机数之神的震撼' => 2,'随机数之神的摄理' => 2,'随机数之神的恶戏' => 2,
	# 福袋惩罚物品
	'乌黑的脸' => Array('title'=>"贪 心 不 足 蛇 吞 象"),
	# 一个特判 - 这游戏中不会出现叫做【神秘条件】的物品吧……
	'神秘条件' => Array('class'=>'lime', 'title'=>"要合成该物品需要满足一个特定的神秘条件。"),
	# OTHERS
	'😂我太酷啦！😂' =>Array('class'=>'rainbow', 'title'=>"一个笑哭黄豆模样的按钮，按下后立刻将自己炸成一朵烟花（自身死亡）。"),
	'【我太帅啦！】' =>Array('title'=>"这是一个整蛊自己的按钮。将会把你的背包替换成一堆无用的游戏王卡片。"),
	'【我太棒啦！】' =>Array('title'=>"这是一个整蛊自己的按钮。将会削掉你的生命和体力，并将它们转化为等效补给。"),
	'【我太强啦！】' =>Array('title'=>"这是一个整蛊自己的按钮。你会向众人宣言你很强，然后为了证明你的实力，你的最大生命值将会下降100点。"),
	'【我太牛啦！】' =>Array('title'=>"这是一个整蛊自己的按钮。将会向众人宣言你很牛，然后为了证明这一点，你会将你的最大生命值和最大体力值变成金钱。"),
	'「我头四」' =>Array('title'=>"使用四种不同的整蛊道具合成的强力彩虹陷阱，踩到的玩家将受到300点固定伤害并变得遍体鳞伤。但如果满足某个条件的话……"),
	'破则战术「我头四」' =>Array('class'=>'minirainbow', 'title'=>"满足某个特定条件后，合成的「我头四」便可以一击必杀。"),
	'神秘的「🥚」' =>Array('class'=>'glitch1', 'title'=>"一个神秘的蛋状物品，你潜意识觉得它可能会很大条，而且觉得它像是什么哺乳生物产生的……"),
	'✦ЦВЙΨХЩΗЖФ✦' =>Array('class'=>'spitem2', 'title'=>"看起来是一个黑色的，安静的盒子，里面可能放着好东西。可以加上一个焰火进一步合成。"),
	'✦ЦΨЙЩЦΑПΨЁВЦЩΨ✦' =>Array('class'=>'spitem2', 'title'=>"看起来是一个橙色的，骚动的盒子，里面可能放着莫名其妙的东西。以及对脸系玩法有用的东西"),
	'✦【自律AI呼唤器】' =>Array('title'=>"这是一个整蛊他人的NPC钥匙。会向游戏内部署大量特殊小兵NPC，你会因此遭到道德拷问。"),
);

$tps_name_lore = Array
(
	# 来自mtkkk的怪主意
	'😂我太酷啦！😂' =>Array('class'=>'minirainbow', 'title'=>"「林董事长不在了，空降的女儿又不管事，摸了摸了……」——林氏软件员工"),
	# LORE，看了这些内容，还不考虑拆分这个文件么？总之先搞这么多……
	'燃素加农炮『爆炎』MK-II' => Array('title'=>"在接受好友的委托之时，一切看起来都只像一个简单的工作。"),
	'奥术盔甲B - 炎' => Array('title'=>"但正如自己的爷爷所说过的那样，看起来简单的东西，往往背后有坑。"),
	'奥术盔甲H - 炎' => Array('title'=>"红暮并不怕什么坑，毕竟坑就是为了踩而出现的，你不踩下去，都可以说是不尊重挖坑的人。"),
	'奥术盔甲A - 炎' => Array('title'=>"在意的事情虽然有很多，但红暮觉得将它们抛在脑后可能更好一点。"),
	'奥术盔甲F - 炎' => Array('title'=>"既然接受了挑战，自己就没有不全力以赴的理由。"),
	'冰炎盔甲B' => Array('title'=>"那命运之日的夕阳，缓慢给一切镀上明亮的橙光。"),
	'冰炎盔甲H' => Array('title'=>"那约定之时的荣耀，为四位被影响的人们裹上金黄的光辉。"),
	'冰炎盔甲A' => Array('title'=>"那幻境之中的风景，以平等的紫光照耀着一切。"),
	'冰炎盔甲F' => Array('title'=>"那为了友人的决意，形成了靛蓝的意志。"),
	'『AZURE RONDO · AQUAMARINE』' => Array('title'=>"那和自己一样的影子，最终遁入了那一抹艳红。"),
	'喷气式红杀重铁剑' => Array('title'=>"「将最基础的武器魔改成了这样了么？真是让人大开眼界。」——芙蓉"),
	'绯红记忆' => Array('title'=>"「先问一句，虽然你似乎吹得很神奇，但这玩意并不是什么超能力吧？」——红暮"),
	'血色强袭' => Array('title'=>"「海鸣姐就像超级英雄那样！」——丁香"),
	'狮虎丝带' => Array('title'=>"「有时候杀伤力最强的东西反而以最简单的形式出现，这个我懂，但这东西是不是太张扬了……？」——亚玛丽欧·维拉蒂安"),
	'落樱巨锤' => Array('title'=>"「先说好了，挥舞着笨重的武器不代表我暗示你人笨重，信任动力装甲的方面，你应该比我更清楚吧？」——冰炎"),
	'八八连流星浮游炮' => Array('title'=>"「真是铺张浪费，浮游炮一发3个就足够了。预算要花在刀刃上，省点钱让我开限定手办哈。」——蓝凝"),
	'✧覆唱之歌' => Array('title'=>"「长大以后你想继承父母的研究吗？」8岁少女的父母如此问道。「那是当然！」8岁少女点头回应。"),
	'✧无畏之爱' => Array('title'=>"「你喜欢什么样子的男生？」13岁少女的同龄闺蜜如此问道。「唔……没想好，最好的伙伴吧……」13岁少女歪了歪头，似乎自己也不满意这个答案。"),
	'✧怜悯之痛' => Array('title'=>"「正在做的，是什么样的东西呢？」5岁少女对自己埋头苦干的父亲如此问道。「这是一个会让大家露出笑容的东西呢。」这就是这位5岁少女父亲的说法。"),
	'✧执念之刺' => Array('title'=>"「为什么要如此拼命呢？」10岁少女对自己好友如此问道。「不拼命的话，就无法保护将被夺走的事物了。」10岁少女的这位好友就这样说出了耍酷的台词。"),
	'✧希望之风' => Array('title'=>"「啊！成功了！」15岁少女欢呼雀跃，但环顾四周，似乎并没有——「恭喜恭喜！」在门外等着的2位15岁少女的好友就在这个时机破门而入！"),
	'◆火之碎片' => Array('title'=>"「在这场交易中，我最终胜你半子。」31岁女强人的意识，于随后遁入虚空。"),
	# 更多的怪文书
	'神秘的「🥚」' =>Array('class'=>'glitchb', 'title'=>"「你就放它一百个心，既然你这么信任我，我就没有做不出来的道理。」——克里斯汀"),
	'✦ЦВЙΨХЩΗЖФ✦' =>Array('class'=>'spitem2', 'title'=>"「知道么？万事都要做好万全的准备，或者说，你要让你的敌人觉得你做好了完全的准备。」——林无月"),
	'✦ЦΨЙЩЦΑПΨЁВЦЩΨ✦' =>Array('class'=>'spitem2', 'title'=>"「你听到……呼唤了吗？」——？？？"),
);

$tps_ik = Array
(
	'Ag' => Array('title' =>"可能带有同志属性",),
	'Al' => Array('title' =>"可能带有热恋属性",),
	'Ah' => Array('title' =>"可能带有？？？属性",),
	'Ac' => Array('title' =>"可能带有重击辅助属性",),
	'B'  => Array('title' =>"使用后可以为电脑设备供电",),
	'C'  => Array('title' =>"使用后可以解除异常状态",),
	'Ce' => Array('title' =>"使用后可以解除麻痹状态",),
	'Ci' => Array('title' =>"使用后可以解除冻结状态",),
	'Cp' => Array('title' =>"使用后可以解除中毒状态",),
	'Cu' => Array('title' =>"使用后可以解除烧伤状态",),
	'Cw' => Array('title' =>"使用后可以解除混乱状态",),
	'EE' => Array('title' =>"使用后有一定概率能够解封当前禁区，需要电池充电",),
	'EW' => Array('title' =>"使用后可改变当前天气，对极端天气无效",),
	'ER' => Array('title' =>"使用后可激活雷达界面",),
	'HH' => Array('title' =>"使用后恢复等于道具效果值的生命",),
	'HS' => Array('title' =>"使用后恢复等于道具效果值的体力",),
	'HB' => Array('title' =>"使用后恢复等于道具效果值的生命和体力",),
	'HM' => Array('title' =>"使用后增加等于道具效果值的歌魂上限",),
	'HT' => Array('title' =>"使用后恢复等于道具效果值的歌魂",),
	'HR' => Array('title' =>"使用后增加等于道具效果值的怒气",),
	'PM' => Array('title' =>"使用后曾加等于道具效果值的歌魂上限",),
	'PT' => Array('title' =>"使用后灰复等于道具效果值的歌魂",),
	'PR' => Array('title' =>"使用后曾加等于道具效果值的怒气",),
	'PH' => Array('title' =>"使用后灰复等于道具效果值的生命",),
	'PS' => Array('title' =>"使用后灰复等于道具效果值的体力",),
	'PB' => Array('title' =>"使用后灰复等于道具效果值的生命和体力",),
	'PB2' => Array('title' =>"使用后灰复等于道具效果值的生命和体力",),
	'GBr'=> Array('title' =>"为带有“连击”属性，且不适用“能源、气体弹药”的枪械供弹",),
	'GBi'=> Array('title' =>"为带有“火焰、冻气”属性，且不适用“能源弹药”的枪械供弹",),
	'GBh'=> Array('title' =>"为“重型枪械”供弹",),
	'GBe'=> Array('title' =>"为带有“电击、音波”属性的枪械供弹",),
	'GB' => Array('title' =>"为普通枪械供弹",),
	'V'  => Array('title' =>"使用后会根据道具效果值获得一定的熟练度",),
	'M'  => Array('title' =>"使用后会根据道具效果值强化特定属性",),
	'MA' => Array('title' =>"使用后会根据道具效果值强化攻击力",),
	'MD' => Array('title' =>"使用后会根据道具效果值强化防御力",),
	'ME' => Array('title' =>"使用后会根据道具效果值获得一定的经验值",),
	'MH' => Array('title' =>"使用后会根据道具效果值强化生命上限",),
	'MS' => Array('title' =>"使用后会根据道具效果值强化体力上限",),
	'T'  => Array('title' =>"使用后可以在当前地区埋设一枚陷阱",),
	'U'  => Array('title' =>"使用后将扫除当前地区内的一枚陷阱……但是这一切真的值得吗？",),
	'WGK'=> Array('title' =>"兼具射击与斩击功效的武器",),
	'WCF'=> Array('title' =>"兼具投掷与灵力功效的武器",),
	'WCP'=> Array('title' =>"兼具投掷与打击功效的武器",),
	'WKF'=> Array('title' =>"兼具斩击与灵力功效的武器",),
	'WKP'=> Array('title' =>"兼具斩击与打击功效的武器",),
	'WFK'=> Array('title' =>"兼具灵力与斩击功效的武器",),
	'WDG'=> Array('title' =>"兼具伏击与射击功效的武器",),
	'WDF'=> Array('title' =>"兼具伏击与灵力功效的武器",),
	'AA' => Array('class'=>'spitem', 'title'=>"可以将一定数量的攻击次数伤害变为0，那之后失效",),
	'AB' => Array('class'=>'spitem', 'title'=>"装备后，对补给品使用毒药下毒变为为其解毒。",),
	'XA' => Array('class'=>'lime', 'title'=>"集齐三个同颜色的不同名代码残片，来合成单人脱出结局道具吧！",),
	'XB' => Array('class'=>'purple', 'title'=>"集齐三个同颜色的不同名代码残片，来合成单人脱出结局道具吧！",),
	'XC' => Array('class'=>'yellow', 'title'=>"集齐三个同颜色的不同名代码残片，来合成单人脱出结局道具吧！",),
	'ZB' => Array('class'=>'lime', 'title'=>"在没有决定称号的时候使用该物品，便可获得该对应称号。",),
	'ZA' => Array('class'=>'neonyellow', 'title'=>"这个物品中似乎含有让你可以独自脱离幻境的方法……",),
	'🥚' => Array('class'=>'purple', 'title'=>"通过提取物品产生的蛋状物品，看起来可以插回其他物品为之强化。",),
	'🎲' => Array('class'=>'spitem', 'title'=>"投掷出骰子，来获得随机效果。",),
	'🎆' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，似乎和你很匹配。",),
	'🎆H' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，似乎和你很匹配。",),
	'🎆V' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，似乎和你很匹配。",),
	'🎆O' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，似乎和你很匹配。",),
	'🎆D' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，似乎和你很匹配。",),
	'🎆B' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，你觉得它似乎能变成别的什么东西。",),
	'🎆C' => Array('class'=>'lime', 'title'=>"鉮秘洊茬裑仩鋽落哋誶爿，沵覺嘚咜姒苸能變荿莂哋什庅崬覀。",),
	'P🎆' => Array('class'=>'lime', 'title'=>"神秘存在身上掉落的碎片，似乎和你狠匹配。",),
);

$tps_isk = Array
(
	'A' => Array('title' => "高概率将殴斩射投爆灵六系对你的伤害减半。",),//测试用
	'a' => Array('title' => "高概率将毒火冻电乱音以及爆炸对你的伤害减半。并避免异常状态。",),//测试用
	'B' => Array('title' => "极高概率将全部物理伤害变为1。",),
	'b' => Array('title' => "极高概率将全部属性伤害变为1。",),
	'C' => Array('title' => "高概率将投系对你的物理伤害减半。",),
	'c' => Array('title' => "攻击时额外获得1点怒气，发动战斗技时会返还10%消耗的怒气",),
	'D' => Array('title' => "高概率将爆系对你的物理伤害，以及爆炸属性伤害减半。",),
	'd' => Array('title' => "攻击对手时，将产生额外的爆炸属性伤害。",),
	'E' => Array('title' => "高概率将电击属性对你的属性伤害减半。并避免身体麻痹状态。",),
	'e' => Array('title' => "攻击对手时，将产生额外的电击属性伤害。也有可能让对手陷入身体麻痹异常状态。",),	
	'F' => Array('title' => "高概率将灵系对你的物理伤害减半。",),
	'f' => Array('title' => "攻击对手时，对其造成无法防御的火焰属性伤害。也有可能让对手陷入烧伤异常状态。",),
	'G' => Array('title' => "高概率将射系（包括重型枪械）对你的物理伤害减半。",),
	'g' => Array('title' => "低概率在攻击异性敌人时伤害加倍，但攻击同性的物理伤害降为1。",),
	'H' => Array('title' => "将你受到的反噬伤害降低90%。",),
	'h' => Array('title' => "高概率将你受到的最高伤害压制在两千左右。",),
	'I' => Array('title' => "高概率将冻气属性对你的属性伤害减半。并避免冻结状态。",),
	'i' => Array('title' => "攻击对手时，将产生额外的冻气属性伤害。也有可能让对手陷入冻结异常状态。",),
	'J' => Array('title' => "将卡片变成可以进行超量合成的素材。",),
	'j' => Array('title' => "使用「武器模式」命令可将该物品转变为其他形态。",),
	'K' => Array('title' => "高概率将斩系对你的物理伤害减半。",),
	'k' => Array('title' => "攻击对手时，对其造成无法防御的冻气属性伤害。也有可能让对手陷入冻结异常状态",),
	'L' => Array('title' => "攻击对手时，让对手的冷却时间大幅度增加。",),
	'l' => Array('title' => "低概率在攻击同性敌人时伤害加倍，但攻击异性的物理伤害降为1。",),
	'M' => Array('title' => "提高一定陷阱回避率。",),
	'm' => Array('title' => "触发陷阱时，中机率免疫其伤害。",),
	'N' => Array('title' => "攻击对手时，中几率将对手防具的防御力修正为一半来计算伤害。",),
	'n' => Array('title' => "攻击对手时，一定几率无效抹消类与防御类属性。",),
	'o' => Array('title' => "这是一把不能装子弹的武器。",),
	'P' => Array('title' => "高概率将殴系对你的物理伤害减半。",),
	'p' => Array('title' => "攻击对手时，将产生额外的毒属性伤害。也有可能让对手陷入中毒异常状态。",),
	'q' => Array('title' => "高概率将毒属性对你的属性伤害减半。并避免中毒状态。",),
	'R' => Array('title' => "这把武器造成的伤害与消耗的耐久为随机值。",),
	'r' => Array('title' => "根据你的熟练度，做出一定数量的连续攻击。",),
	'S' => Array('title' => "枪支类武器开火时不会产生声音。",),
	's' => Array('title' => "这个物品是游戏王同调合成的必备素材。",),
	'U' => Array('title' => "高概率将火焰属性对你的属性伤害减半。并避免烧伤状态。",),
	'u' => Array('title' => "攻击对手时，将产生额外的火焰属性伤害。也有可能让对手陷入烧伤状态。",),
	'V' => Array('title' => "装备或拾取带有诅咒属性的物品时，无法将其丢弃、赠予或存入容器。\n持有诅咒道具时，可能会在探索中遭遇不测……",),
	'v' => Array('title' => "丢弃本物品，或你死亡时，本物品会消失。",),
	'W' => Array('title' => "高概率将音波属性对你的属性伤害减半。并避免混乱状态。",),
	'w' => Array('title' => "攻击对手时，将产生额外的音波属性伤害。也有可能让对手陷入混乱异常状态。",),
	'X' => Array('title' => "可能会一击必杀。",),
	'x' => Array('title' => "人类，可以挑战神么？"),
	'y' => Array('title' => "攻击对手时，一定几率无效属性抹消类与属性防御类属性，并增加让对手陷入异常状态的概率。",),
	'Z' => Array('title' => "该物品可以使用特定物品进行强化。",),
	'z' => Array('title' => "那么，这个有什么用呢……？",),
	'-' => Array('title' => "战斗时无效双方的防具效果。",),
	'*' => Array('title' => "战斗时无效双方的武器·饰品效果，并大幅度降低灵系伤害。",),
	'+' => Array('title' => "战斗时大幅度向低修正双方的熟练度。",),
	'^' => Array('title' => "装备后，可使用「背包」相关指令存储物品。",),
	'🧰' => Array('title' => "将带有该属性的物品用作某些合成的素材时，可以重复利用。",),
);


?>
