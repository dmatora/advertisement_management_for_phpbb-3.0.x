<?php
/**
*
* @package phpBB3 Advertisement Management
* @version $Id: ads.php 92 2009-11-02 16:26:43Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Translation by Serhij http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1189655
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADVERTISEMENT_MANAGEMENT_CREDITS'		=> 'Advertisements by <a href="http://www.lithiumstudios.org/">Advertisement Management</a>',
	'MY_ADS'								=> 'Менеджер рекламы',							//'My Advertisements',

	// Default Positions
	'ABOVE_FOOTER'			=> 'Над нижним колонтитулом',									//'Above Footer',
	'ABOVE_HEADER'			=> 'Над верхним колонитулом',									//'Above Header',
	'ABOVE_POSTS'			=> 'Над сообщениями',											//'Above Posts',
	'AFTER_EVERY_POST'		=> 'После каждого сообщения за исключением первого',			//'After Every Post Except First',
	'AFTER_FIRST_POST'		=> 'После первого сообщения',									//'After First Post',
	'BELOW_FOOTER'			=> 'Под нижним колонтитулом',									//'Below Footer',
	'BELOW_HEADER'			=> 'Под верхним колонтитулом',									//'Below Header',
	'BELOW_POSTS'			=> 'Под сообщениями',											//'Below Posts',

	// ACP
	'0_OR_NA'									=> '0 или N/A',								//'0 or N/A',

	'ACP_ADVERTISEMENT_MANAGEMENT_EXPLAIN'		=> 'Настройка параметров Менеджера рекламы. <br>Добавление/Редактирование/Удаление рекламы и/или ее расположения.',	//'Here you can change the Advertisement Management Settings, Add/Remove/Edit Advertisement Positions, and Add/Remove/Edit Advertisements.',
	'ACP_ADVERTISEMENT_MANAGEMENT_SETTINGS'		=> 'Параметры менеджера рекламы',			//'Advertisement Management Settings',
	'ADS_ACCURATE_VIEWS'						=> 'Точный подсчет просмотров',				//'Accurate View Counts',
	'ADS_ACCURATE_VIEWS_EXPLAIN'				=> 'Повышает точность подсчета просмотра рекламы, но увеличивает нагрузку сервера.',	//'Makes counting of Ad Views much more accurate, but increases server load.',
	'ADS_COUNT_CLICKS'							=> 'Считать клики',							//'Count Ad Clicks',
	'ADS_COUNT_CLICKS_EXPLAIN'					=> 'При выборе "Нет" - рекламые клики не подсчитываются (меньшая нагрузка сервера)',	//'If set to no, advertisement clicks will not be counted (less server load).',
	'ADS_COUNT_VIEWS'							=> 'Считать показы',						//'Count Ad Views',
	'ADS_COUNT_VIEWS_EXPLAIN'					=> 'При выборе "Нет" - показы не подсчитываются (меньшая нагрузка сервера)',	//'If set to no, advertisement views will not be counted (less server load).',
	'AD_CREATED'								=> 'Создана',								//'Ad Created',
	'ADS_ENABLE'								=> 'Разрешить',								//'Enable Advertisements',
	'ADS_GROUP'									=> 'Группа рекламных владельцев',			//'Advertisement Owner Group',
	'ADS_GROUP_EXPLAIN'							=> 'Группа в которую добавлять владельца (не обязательно, только при необходимости добавлять в специальную группу для отслеживания)',	//'Group the advertisement owners will be added to (not required, only if you want to add them to a specific group to keep track of them).',
	'ADS_RULES_FORUMS'							=> 'Использовать Форумные права',			//'Use Forum Rules for Ads',
	'ADS_RULES_FORUMS_EXPLAIN'					=> 'Активирует настройку показа рекламы для форумов. <br> Если не планируется использование этой особенности, отключить для экономии ресурсов.',	//'If enabled, it allows you to control which forums each advertisement is displayed in.  If you do not plan on using this you should set this to no so it uses less resources.',
	'ADS_RULES_GROUPS'							=> 'Использовать Права групп',				//'Use Group Rules for Ads',
	'ADS_RULES_GROUPS_EXPLAIN'					=> 'Активирует настройку показа рекламы для Групп. <br> Если не планируется использование этой особенности, отключить для экономии ресурсов.',	//'If enabled, it allows you to control which groups do/don\'t see specific advertisements.  If you do not plan on using this you should set this to no so it uses less resources.',
	'ADS_VERSION'								=> 'Версия Менеджера рекламы',				//'Advertisement Management Version',
	'ADVERTISEMENT'								=> 'Реклама',								//'Advertisement',
	'ADVERTISEMENT_MANAGEMENT_UPDATE_SUCCESS'	=> 'Параметры Менеджера рекламы сохранены',	//'The Advertisement Management settings have been updated successfully!',
	'AD_ADD_SUCCESS'							=> 'Реклама добавлена!',					//'Advertisement Added Successfully!',
	'AD_CLICK_LIMIT'							=> 'Лимит рекламных кликов',				//'Ad Clicks Limit',
	'AD_CLICK_LIMIT_EXPLAIN'					=> 'Количество кликов до отключения рекламы. Установите 0 для снятия ограничений.',	//'0 to disable, otherwise the ad will become disabled after this number of clicks.',
	'AD_CLICKS'									=> 'Рекламные клики',						//'Ad Clicks',
	'AD_CLICKS_EXPLAIN'							=> 'Текущее количество кликов для указанной рекламы (при корректной настройке)',	//'The current number of clicks for this advertisement (if setup correctly).',
	'AD_CODE'									=> 'Код рекламы',							//'Ad Code',
	'AD_CODE_EXPLAIN'							=> 'HTML-код рекламы. BBcodes не поддерживаются.<br> <strong>Для включения счетчика кликов поместите {COUNT_CLICK} в любом месте кода, где разрешены атрибуты on-click</strong> (например <em>a tag</em>).',		//'The Advertisement code you would like shown goes here.  All code should be put in a raw HTML form, BBcodes are not supported.<br /><strong>If you would like to enable the click counter, use the {COUNT_CLICK} in any place where the onclick attribute is allowed (the a tag for example).</strong>',
	'AD_EDIT_SUCCESS'							=> 'Реклама изменена',						//'Advertisement Edited Successfully!',
	'AD_ENABLED'								=> 'Разрешить рекламу',						//'Ad Enabled',
	'AD_ENABLED_EXPLAIN'						=> 'Снять пометку для отключения показа рекламы',	//'Uncheck to disable this advertisement from displaying.',
	'AD_FORUMS'									=> 'Форумы',								//'Forum List',
	'AD_FORUMS_EXPLAIN'							=> 'Выберите форумы для показа рекламы. Удерживайте CTRL для выбора нескольких форумов.',	//'Select the forums where you would like this ad to be displayed.  You may select multiple forums by holding down the CTRL key.',
	'AD_GROUPS'									=> 'Группы',								//'Groups',
	'AD_GROUPS_EXPLAIN'							=> 'Укажите группы для исключения из показа рекламы. Удерживайте CTRL для выбора нескольких групп.',	//'Select the groups you do <strong>NOT</strong> want this advertisement to be shown to.  You may select multiple groups by holding the CTRL key while clicking more groups.',
	'AD_LIST_NOTICE'							=> 'Подсчет рекламных кликов будет доступен только при использовании {COUNT_CLICK} в месте где разрешены атрибуты on-click',	//'Ad Clicks will only be available if you used the {COUNT_CLICK} in a place that works with the onclick attribute.',
	'AD_MAX_VIEWS'								=> 'Максимум показов',						//'Max Views',
	'AD_MAX_VIEWS_EXPLAIN'						=> 'Количество показов до отключения рекламы. Установите 0 для снятия ограничений.',	//'The maximum views before this advertisement will no longer be shown. <strong>0 means no max limit</strong>.',
	'AD_NAME'									=> 'Имя',									//'Ad Name',
	'AD_NAME_EXPLAIN'							=> 'Для обозначения рекламы',				//'This is only used for your recognition of the ad.',
	'AD_NOT_EXIST'								=> 'Выбранная реклама не существует.',		//'The selected advertisement does not exist.',
	'AD_NOTE'									=> 'Примечание',							//'Ad Notes',
	'AD_NOTE_EXPLAIN'							=> 'Примечание. Отображается только в ACP',	//'Enter any notes for this advertisement if you\'d like.  These notes are not shown anywhere except in the ACP.',
	'AD_OWNER'									=> 'Владелец',								//'Ad Owner',
	'AD_OWNER_EXPLAIN'							=> 'Пользователь которому разрешается видеть панель управления рекламой.',	//'The user who owns this advertisement (can see it in their advertisements panel).',
	'AD_POSITIONS'								=> 'Области показа',						//'Positions',
	'AD_POSITIONS_EXPLAIN'						=> 'Укажите области показа рекламы',		//'Select the positions where you would like this advertisement to show.',
	'AD_PRIORITY'								=> 'Приоритет',								//'Ad Priority',
	'AD_PRIORITY_EXPLAIN'						=> 'Чем выше значение приоритета, тем чаще показ рекламы. Например реклама с приоритетом 2 будет показана в 2 раза чаще чем с приоритетом 1.',	//'The higher the number the more likely the advertisement will be displayed.  For example, an ad with a priority of 2 will be 2x as likely as an ad with a priority of 1 to be shown, 3 would be 3x as likely, etc, etc.',
	'AD_TIME_END'								=> 'Показывать до',							//'Run until',
	'AD_TIME_END_BEFORE_NOW'					=> 'Дата завершения показа (в формате strtotime).',	//'The end time you entered is before the time right now.  Please make sure you are using a strtotime compatible date.',
	'AD_TIME_END_EXPLAIN'						=> 'Дата завершения показа рекламы. <br><b><u>Важно!</u></b> фотмат даты должен соответсвовать требованям функции PHP <a href="http://us2.php.net/manual/en/function.strtotime.php"><b>strtotime</b></a> иначе дата завершения показа установлена не будет. <br><i>Эта дата не является точной, т.к. не учитывает разницу временных зон. Рекомендуется учитывать погрешность в 1 день.</i>',	//'Enter a valid date to end the advertisement at.  After the entered time the ad will be disabled automatically.  Note that this uses the PHP <a href="http://us2.php.net/manual/en/function.strtotime.php">strtotime</a> function, so be sure to format it correctly or it will not be set.<br /><br /><strong>This end date is not entirely accurate with timezones and such, so exact times should not be relied on.  It is recommended that you plan on an accuracy of within 1 day of the given time.</strong>',
	'AD_VIEW_LIMIT'								=> 'Лимит показов рекламы',					//'Ad Views Limit',
	'AD_VIEW_LIMIT_EXPLAIN'						=> 'Количество показов до отключения рекламы. Установите 0 для снятия ограничений.',	//'0 to disable, otherwise the ad will become disabled after this number of views.',
	'AD_VIEWS'									=> 'Показы',								//'Ad Views',
	'AD_VIEWS_EXPLAIN'							=> 'Количество показов рекламы',			//'The current number of views of this advertisement.',
	'ALL_FORUMS_EXPLAIN'						=> 'Выбрать для показа во всех форумах. Реклама не показывается на страницах не относящихся к форуму, например FAQ и т.д.',	//'Select to show in all forums and pages.  Note that if this is unchecked the advertisement will not show on non-forum related pages (like the FAQ page for example).',

	'CREATE_AD'									=> 'Создать рекламу',						//'Create Ad',
	'CREATE_POSITION'							=> 'Создать область показа',				//'Create Position',
	'COPY'										=> 'Скопировать',

	'DELETE_AD'									=> 'Удалить рекламу',						//'Delete Advertisement',
	'DELETE_AD_CONFIRM'							=> 'Удаление рекламы, продолжить?',			//'Are you sure you want to remove this advertisement?',
	'DELETE_AD_SUCCESS'							=> 'Реклама удалена',						//'The advertisement has been successfully deleted!',
	'DELETE_POSITION'							=> 'Удалить область показа',				//'Delete Position',
	'DELETE_POSITION_CONFIRM'					=> 'Удаление области показа, продолжить?',	//'Are you sure you want to remove this position?  If you remove a position, any advertisements that were shown in that position will no longer be shown.',
	'DELETE_POSITION_SUCCESS'					=> 'Область показа удалена',				//'The position has been successfully deleted!',

	'FALSE'										=> 'Нет',									//'False',

	'NO_ADS_CREATED'							=> 'Реклама не создана',					//'No Ads Created',
	'NO_AD_NAME'								=> 'Необходимо указать имя рекламы',		//'You must set a name for the advertisement.',
	'NO_POSITIONS_CREATED'						=> 'Область показа не создана',				//'No Positions Created',

	'POSITION'									=> 'Область показа',						//'Position',
	'POSITION_CODE'								=> 'Код области показа',					//'Position Code',
	'POSITION_EDIT_SUCCESS'						=> 'Область показа изменена',				//'Position Edited Successfully!',
	'POSITION_NAME'								=> 'Имя области показа',					//'Position Name',
	'POSITION_NAME_EXPLAIN'						=> 'Название области показа',				//'The name of the position.',
	'POSITION_NOT_EXIST'						=> 'Указанная область показа не существует',	//'The selected position does not exist.',
	'POSTITION_ADD_SUCCESS'						=> 'Область показа добавлена!',				//'Position Added Successfully!',
	'POSTITION_ALREADY_EXIST'					=> 'Имя области показа уже существует',		//'You already have a position by that name.',

	'TRUE'										=> 'Да',									//'True',
));

?>