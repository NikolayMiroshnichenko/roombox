<?php

//***************** Страница с завершением заказа ******************
session_start();

// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    0 => array(
        'product_id' => $_REQUEST['frId'],    //код товара (из каталога CRM)
        'price'      => $_REQUEST['price'], //цена товара 1
        'count'      => '1',                     //количество товара 1

    ),
    1 => array(
        'product_id' => $_REQUEST['order'],    //код товара 2 (из каталога CRM)
        'price'      => $_REQUEST['price'], //цена товара 2
        'count'      => '1',                     //количество товара 2

    )
);
$products = urlencode(serialize($products_list));
$sender = urlencode(serialize($_SERVER));
// параметры запроса
$data = array(
    'key'             => 'c84f4ccc034edf4dea50cee74321a1c8', //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true) * 10), 0, '.', ''), //идентификатор (код) заказа (*автоматически*)
    'country'         => 'UA',                         // Географическое направление заказа
    'office'          => '1',                          // Офис (id в CRM)
    'products'        => $products,                    // массив с товарами в заказе
    'bayer_name'      => $_REQUEST['name'],            // покупатель (Ф.И.О)
    'phone'           => $_REQUEST['phone'],           // телефон
    'email'           => $_REQUEST['email'],           // электронка
    'comment'         => $_REQUEST['product_name'],    // комментарий
    'delivery'        => $_REQUEST['delivery'],        // способ доставки (id в CRM)
    'delivery_adress' => $_REQUEST['delivery_adress'], // адрес доставки
    'payment'         => '',                           // вариант оплаты (id в CRM)
    'sender'          => $sender,
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'], // utm_campaign
    'additional_1'    => '',                               // Дополнительное поле 1
    'additional_2'    => '',                               // Дополнительное поле 2
    'additional_3'    => '',                               // Дополнительное поле 3
    'additional_4'    => ''                                // Дополнительное поле 4
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://otovleksandr.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON





// send google
$response = array();
$field1 = isset($_POST['name']) ? $_POST['name'] : false; // сунем каждое поле в отдельную переменную
$field3 = isset($_POST['phone']) ? $_POST['phone'] : false;
$field4 = isset($_POST['utm_source']) ? $_POST['utm_source'] : false;
$field5 = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : false;
$field6 = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : false;
$field7 = isset($_POST['utm_term']) ? $_POST['utm_term'] : false;
$field8 = isset($_POST['utm_content']) ? $_POST['utm_content'] : false;
$field9 = isset($_POST['frId']) ? $_POST['frId'] : false;
$field10 = isset($_POST['price']) ? $_POST['price'] : false;
$field11 = isset($_POST['yd']) ? $_POST['yd'] : false;
$field12 = isset($_POST['prid']) ? $_POST['prid'] : false;
if (isset($_POST['order'])) {
    $data = explode('|', $_POST['order']);
    $field9 = $data[0];
    $field10 = $data[1];
}
if (isset($_POST['frId'])) {
    $data = explode('|', $_POST['frId']);
    $field9 = $data[0];
    $field10 = $data[1];
}




// теперь подготовим данные для отправки в гугл форму
// $url = 'https://docs.google.com/forms/d/e/1FAIpQLSfKbEB7ZsWfDdsmFf9a3OoS8jJmlnhyfoNt6ABqZPBdOo5tPg/formResponse';
// $url = 'https://docs.google.com/forms/d/e/1FAIpQLSew0GiTNL4n2YxKulpfEWng0Z1yf_4fdsK2Da42zw6zm49LVQ/formResponse'; // куда слать, это атрибут action у гугл формы
$url = 'https://docs.google.com/forms/u/0/d/e/1FAIpQLSew0GiTNL4n2YxKulpfEWng0Z1yf_4fdsK2Da42zw6zm49LVQ/formResponse'; // куда слать, это атрибут action у гугл формы

$data = array(); // массив для отправки в гугл форм
$data['entry.51747417'] = $field1; // указываем соответствия полей, ключи массива это нэймы оригинальных полей гуглформы
$data['entry.407376491'] = $field3;
$data['entry.1059893664'] = $field4;
$data['entry.1518625359'] = $field5;
$data['entry.106256603'] = $field6;
$data['entry.1402571606'] = $field7;
$data['entry.463864967'] = $field8;
$data['entry.87497744'] = $field9;
$data['entry.796086709'] = $field10;


$data = http_build_query($data);

$options = array( // задаем параметры запроса
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => $data,
    ),
);
$context  = stream_context_create($options); // создаем контекст отправки
$result = file_get_contents($url, false, $context); // отправляем

// print_r($context);
// print_r($result);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['phone'])) {
        if (isset($_POST['name'])) {
            if (!empty($_POST['name'])) {
                $name = strip_tags($_POST['name']);
                $nameFieldset = "Имя пославшего: ";
            }
        }

        if (isset($_POST['phone'])) {
            if (!empty($_POST['phone'])) {
                $phone = strip_tags($_POST['phone']);
                $phoneFieldset = "Телефон: ";
            }
        }



        if (isset($_POST['frId'])) {
            if (!empty($_POST['frId'])) {
                $frId = strip_tags($_POST['frId']);
                $frIdFieldset = "Название: ";
            }
        }

        if (isset($_POST['price'])) {
            if (!empty($_POST['price'])) {
                $price = strip_tags($_POST['price']);
                $priceFieldset = "Цена: ";
            }
        }

        if (isset($_POST['prid'])) {
            if (!empty($_POST['prid'])) {
                $prid = strip_tags($_POST['prid']);
                $pridFieldset = "prid: ";
            }
        }

        if (isset($_POST['order'])) {
            if (!empty($_POST['order'])) {
                $price = strip_tags($_POST['order']);
                $priceFieldset = "Название|Цена: ";
            }
        }




        if (isset($_POST['theme'])) {
            if (!empty($_POST['theme'])) {
                $theme = strip_tags($_POST['theme']);
                $themeFieldset = "Тема: ";
            }
        }
        $token = "837198726:AAGrEUD1q4fRhHrARc7kdpZPg2-ICE2S6Oc";
        $chat_id = "-414948526";
        $arr = array(
            $nameFieldset => $name,
            $phoneFieldset => $phone,
            $themeFieldset => $theme,
            $priceFieldset => $price,
            $frIdFieldset => $frId,
            $orderFieldset => $order,
            $pridFieldset => $prid,
        );
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
        if ($sendToTelegram) {

            echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
            return true;
        } else {
            echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
        }
    } else {
        echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
    }
} else {
    header("Location: /");
}
