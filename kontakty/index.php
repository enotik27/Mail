<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты"); ?>
<head>
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/contacts.css" rel="stylesheet" type="text/css" rel="stylesheet" type="text/css">
</head>
<div id="content-wrapper">
	<div id="content">
		<div class="container">
            <form action="/send.php" method="POST">
                <div class="obshii-block clearfix">
                    <div class="pravaya-storona">
                        <div class="form-container">
                            <h2>Форма проверки</h2>
                                <div id="note"></div>
                            <div id="fields">
                                 <label>Имя</label>
                                 <input type="text" name="user_name" value="" placeholder="Введите ваше имя">
                                 <label>Email</label>
                                 <input type="text" name="user_email" value="">
                                 <label>Телефон</label>
                                 <input type="text" name="user_phone" value="" placeholder="Например 89251122333">
                                 <label>Сообщение</label>
                                 <input type="text" name="user_mess"  placeholder="Текст">
                                 <input class="btn" type="submit" name="submit" value="Отправить!">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>