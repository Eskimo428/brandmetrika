<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brandmetrika
 */

// Подключение стилей и скриптов
function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri().'/assets/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

//404
function custom_404_page() {
    global $wp_query;

    if ($wp_query->is_404) {
        $page = get_page_by_title('404-2'); 
        if (!empty($page)) {
            $wp_query->set('page_id', $page->ID);
            $wp_query->is_page = true;
            $wp_query->is_404 = false;
        }
    }
}
add_action('template_redirect', 'custom_404_page');




//отправка формы
//

wp_enqueue_script('ajax-scripts', get_template_directory_uri() . '/assets/js/ajax-scripts.js', array('jquery'), null, true);

add_action('wp_ajax_custom_feedback_form', 'custom_feedback_form_handler');
add_action('wp_ajax_nopriv_custom_feedback_form', 'custom_feedback_form_handler');


function custom_feedback_form_handler() {
    $response = array();

    // Обработка данных формы
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_text_field($_POST['message']);

    // Проверка наличия данных
    if (!empty($name) && !empty($email) && !empty($phone)) {
        // Отправка письма на указанный адрес
        $to = 'm.kaplina@brandmetrika.ru , ek-sagadeeva@mail.ru';

        // Определяем тему сообщения
        $subject = 'Новая заявка с сайта';

        // Проверяем, загружен ли файл
        if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === 0) {
            $uploaded_file = $_FILES['attachment'];

            // Путь для сохранения загруженного файла
            $upload_dir = wp_upload_dir();
            $file_name = basename($uploaded_file['name']);

            // Генерируем уникальное имя для файла
            $file_name = wp_unique_filename($upload_dir['path'], $file_name);
            $file_path = $upload_dir['path'] . '/' . $file_name;

            if (move_uploaded_file($uploaded_file['tmp_name'], $file_path)) {
                $subject = 'Отклик на вакансию';
            } else {
                // Произошла ошибка при перемещении файла
                $file_path = ''; // Если файл не загружен, оставляем пустым
            }
        }

        $message_body = "Имя: $name<br>Электронная почта: $email<br>Телефон: $phone<br>Сообщение: $message";

        if (!empty($file_path)) {
            $message_body .= "<br><br>Прикрепленный файл: <a href='" . esc_url($upload_dir['url'] . '/' . $file_name) . "'>$file_name</a>";
        }

        $headers = array('Content-Type: text/html; charset=UTF-8');

        if (wp_mail($to, $subject, $message_body, $headers)) {
            $response['success'] = true; 
        } else {
            $response['error'] = 'Ошибка при отправке письма';
        }
    } else {
        $response['error'] = 'Пустые данные формы'; 
    }

    wp_send_json($response);
    exit;
}



