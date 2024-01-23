<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Наскоро създадени',
    'recently_created_pages' => 'Наскоро създадени страници',
    'recently_updated_pages' => 'Наскоро актуализирани страници',
    'recently_created_chapters' => 'Наскоро създадени глави',
    'recently_created_books' => 'Наскоро създадени книги',
    'recently_created_shelves' => 'Наскоро създадени рафтове',
    'recently_update' => 'Наскоро актуализирани',
    'recently_viewed' => 'Скорошно разгледани',
    'recent_activity' => 'Последна активност',
    'create_now' => 'Създай една сега',
    'revisions' => 'Ревизии',
    'meta_revision' => 'Ревизия #:revisionCount',
    'meta_created' => 'Създадено преди :timeLength',
    'meta_created_name' => 'Създадено преди :timeLength от :user',
    'meta_updated' => 'Актуализирано :timeLength',
    'meta_updated_name' => 'Актуализирано преди :timeLength от :user',
    'meta_owned_name' => 'Притежавано от :user',
    'meta_reference_count' => 'Referenced by :count item|Referenced by :count items',
    'entity_select' => 'Избор на обект',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Изображения',
    'my_recent_drafts' => 'Моите скорошни драфтове',
    'my_recently_viewed' => 'Моите скорошни преглеждания',
    'my_most_viewed_favourites' => 'Моите най-преглеждани любими',
    'my_favourites' => 'Моите фаворити',
    'no_pages_viewed' => 'Не сте прегледали никакви страници',
    'no_pages_recently_created' => 'Не са били създавани страници скоро',
    'no_pages_recently_updated' => 'Не са били актуализирани страници скоро',
    'export' => 'Експортиране',
    'export_html' => 'Прикачени уеб файлове',
    'export_pdf' => 'PDF файл',
    'export_text' => 'Обикновен текстов файл',
    'export_md' => 'Markdown файл',

    // Permissions and restrictions
    'permissions' => 'Права',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Запази права',
    'permissions_owner' => 'Собственик',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Резултати от търсенето',
    'search_total_results_found' => ':count резултати намерени|:count общо намерени резултати',
    'search_clear' => 'Изчисти търсенето',
    'search_no_pages' => 'Няма страници отговарящи на търсенето',
    'search_for_term' => 'Търси :term',
    'search_more' => 'Още резултати',
    'search_advanced' => 'Подробно търсене',
    'search_terms' => 'Термини за търсене',
    'search_content_type' => 'Тип на съдържание',
    'search_exact_matches' => 'Точни съвпадения',
    'search_tags' => 'Търсене на тагове',
    'search_options' => 'Настройки',
    'search_viewed_by_me' => 'Прегледано от мен',
    'search_not_viewed_by_me' => 'Непрегледано от мен',
    'search_permissions_set' => 'Задаване на права',
    'search_created_by_me' => 'Създадено от мен',
    'search_updated_by_me' => 'Обновено от мен',
    'search_owned_by_me' => 'Притежаван от мен',
    'search_date_options' => 'Настройки на дати',
    'search_updated_before' => 'Обновено преди',
    'search_updated_after' => 'Обновено след',
    'search_created_before' => 'Създадено преди',
    'search_created_after' => 'Създадено след',
    'search_set_date' => 'Задаване на дата',
    'search_update' => 'Обнови търсенето',

    // Shelves
    'shelf' => 'Рафт',
    'shelves' => 'Рафтове',
    'x_shelves' => ':count Рафт|:count Рафтове',
    'shelves_empty' => 'Няма създадени рафтове',
    'shelves_create' => 'Създай нов рафт',
    'shelves_popular' => 'Популярни рафтове',
    'shelves_new' => 'Нови рафтове',
    'shelves_new_action' => 'Нов рафт',
    'shelves_popular_empty' => 'Най-популярните рафтове ще излязат тук.',
    'shelves_new_empty' => 'Най-новите рафтове ще излязат тук.',
    'shelves_save' => 'Запази рафт',
    'shelves_books' => 'Книги на този рафт',
    'shelves_add_books' => 'Добави книги към този рафт',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Този рафт няма добавени книги',
    'shelves_edit_and_assign' => 'Редактирай рафта за да добавиш книги',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'Копирай настойките за достъп към книгите',
    'shelves_copy_permissions' => 'Копирай настройките за достъп',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Книга',
    'books' => 'Книги',
    'x_books' => ':count Книга|:count Книги',
    'books_empty' => 'Няма създадени книги',
    'books_popular' => 'Популярни книги',
    'books_recent' => 'Скоро разглеждани книги',
    'books_new' => 'Нови книги',
    'books_new_action' => 'Нова книга',
    'books_popular_empty' => 'Най-популярните книги ще излязат тук.',
    'books_new_empty' => 'Най-новите книги ще излязат тук.',
    'books_create' => 'Създай нова книга',
    'books_delete' => 'Изтрита книга',
    'books_delete_named' => 'Изтрий книга :bookName',
    'books_delete_explain' => 'Това действие ще изтрие книга с името \':bookName\'. Всички страници и глави ще бъдат изтрити.',
    'books_delete_confirmation' => 'Сигурен ли сте, че искате да изтриете книгата?',
    'books_edit' => 'Редактиране на книга',
    'books_edit_named' => 'Редактирай книга :bookName',
    'books_form_book_name' => 'Име на книга',
    'books_save' => 'Запази книга',
    'books_default_template' => 'Default Page Template',
    'books_default_template_explain' => 'Assign a page template that will be used as the default content for all new pages in this book. Keep in mind this will only be used if the page creator has view access to those chosen template page.',
    'books_default_template_select' => 'Select a template page',
    'books_permissions' => 'Настройки за достъп до книгата',
    'books_permissions_updated' => 'Настройките за достъп до книгата бяха обновени',
    'books_empty_contents' => 'Няма създадени страници или глави към тази книга.',
    'books_empty_create_page' => 'Създаване на нова страница',
    'books_empty_sort_current_book' => 'Сортирай настоящата книга',
    'books_empty_add_chapter' => 'Добавяне на раздел',
    'books_permissions_active' => 'Настройките за достъп до книгата са активни',
    'books_search_this' => 'Търси в книгата',
    'books_navigation' => 'Навигация на книгата',
    'books_sort' => 'Сортирай съдържанието на книгата',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'Сортирай книга :bookName',
    'books_sort_name' => 'Сортиране по име',
    'books_sort_created' => 'Сортирай по дата на създаване',
    'books_sort_updated' => 'Сортирай по дата на обновяване',
    'books_sort_chapters_first' => 'Първа глава',
    'books_sort_chapters_last' => 'Последна глава',
    'books_sort_show_other' => 'Покажи други книги',
    'books_sort_save' => 'Запази новата подредба',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'Копирай книгата',
    'books_copy_success' => 'Книгата е копирана успешно',

    // Chapters
    'chapter' => 'Глава',
    'chapters' => 'Глави',
    'x_chapters' => ':count Глава|:count Глави',
    'chapters_popular' => 'Популярни глави',
    'chapters_new' => 'Нова глава',
    'chapters_create' => 'Създай нова глава',
    'chapters_delete' => 'Изтрий глава',
    'chapters_delete_named' => 'Изтрий глава :chapterName',
    'chapters_delete_explain' => 'Това ще изтрие главата \':chapterName\'. Всички страници в главата също ще бъдат изтрити.',
    'chapters_delete_confirm' => 'Сигурни ли сте, че искате да изтриете тази глава?',
    'chapters_edit' => 'Редактирай глава',
    'chapters_edit_named' => 'Актуализирай глава :chapterName',
    'chapters_save' => 'Запази глава',
    'chapters_move' => 'Премести глава',
    'chapters_move_named' => 'Премести глава :chapterName',
    'chapters_copy' => 'Копирай главата',
    'chapters_copy_success' => 'Главата е копирана успешно',
    'chapters_permissions' => 'Настойки за достъп на главата',
    'chapters_empty' => 'Няма създадени страници в тази глава.',
    'chapters_permissions_active' => 'Настройките за достъп до глава са активни',
    'chapters_permissions_success' => 'Настройките за достъп до главата бяха обновени',
    'chapters_search_this' => 'Търси в тази глава',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Страница',
    'pages' => 'Страници',
    'x_pages' => ':count Страница|:count Страници',
    'pages_popular' => 'Популярни страници',
    'pages_new' => 'Нова страница',
    'pages_attachments' => 'Прикачени файлове',
    'pages_navigation' => 'Навигация на страница',
    'pages_delete' => 'Изтрий страница',
    'pages_delete_named' => 'Изтрий страница :pageName',
    'pages_delete_draft_named' => 'Изтрий чернова :pageName',
    'pages_delete_draft' => 'Изтрий чернова',
    'pages_delete_success' => 'Страницата е изтрита',
    'pages_delete_draft_success' => 'Черновата на страницата бе изтрита',
    'pages_delete_warning_template' => 'This page is in active use as a book default page template. These books will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'Сигурни ли сте, че искате да изтриете тази страница?',
    'pages_delete_draft_confirm' => 'Сигурни ли сте, че искате да изтриете тази чернова?',
    'pages_editing_named' => 'Редактиране на страница :pageName',
    'pages_edit_draft_options' => 'Настройки на черновата',
    'pages_edit_save_draft' => 'Запазване на чернова',
    'pages_edit_draft' => 'Редактирай на черновата',
    'pages_editing_draft' => 'Редактиране на чернова',
    'pages_editing_page' => 'Редактиране на страница',
    'pages_edit_draft_save_at' => 'Черновата е запазена в ',
    'pages_edit_delete_draft' => 'Изтрий чернова',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Отхвърляне на черновата',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Задайте регистър на промените',
    'pages_edit_enter_changelog_desc' => 'Въведете кратко резюме на промените, които сте създали',
    'pages_edit_enter_changelog' => 'Въведи регистър на промените',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Запазване на страницата',
    'pages_title' => 'Заглавие на страницата',
    'pages_name' => 'Име на страницата',
    'pages_md_editor' => 'Редактор',
    'pages_md_preview' => 'Предварителен преглед',
    'pages_md_insert_image' => 'Добавяна на изображение',
    'pages_md_insert_link' => 'Добави линк към обекта',
    'pages_md_insert_drawing' => 'Вмъкни рисунка',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Страницата не принадлежи в никоя глава',
    'pages_move' => 'Премести страницата',
    'pages_copy' => 'Копиране на страницата',
    'pages_copy_desination' => 'Копиране на дестинацията',
    'pages_copy_success' => 'Страницата беше успешно копирана',
    'pages_permissions' => 'Настройки за достъп на страницата',
    'pages_permissions_success' => 'Настройките за достъп до страницата бяха обновени',
    'pages_revision' => 'Ревизия',
    'pages_revisions' => 'Ревизии на страницата',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Ревизии на страницата :pageName',
    'pages_revision_named' => 'Ревизия на страницата :pageName',
    'pages_revision_restored_from' => 'Възстановено от #:id; :summary',
    'pages_revisions_created_by' => 'Създадено от',
    'pages_revisions_date' => 'Дата на ревизията',
    'pages_revisions_number' => '№',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Ревизия №:id',
    'pages_revisions_numbered_changes' => 'Ревизия №:id Промени',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'История на промените',
    'pages_revisions_changes' => 'Промени',
    'pages_revisions_current' => 'Текуща версия',
    'pages_revisions_preview' => 'Предварителен преглед',
    'pages_revisions_restore' => 'Възстановяване',
    'pages_revisions_none' => 'Тази страница няма ревизии',
    'pages_copy_link' => 'Копирай връзката',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Настройките за достъп до страницата са активни',
    'pages_initial_revision' => 'Първо публикуване',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Нова страница',
    'pages_editing_draft_notification' => 'В момента редактирате чернова, която беше последно обновена :timeDiff.',
    'pages_draft_edited_notification' => 'Тази страница беше актуализирана от тогава. Препоръчително е да изтриете настоящата чернова.',
    'pages_draft_page_changed_since_creation' => 'Страницата е била обновена от създаването на черновата. Препоръчително е да изтриеш черновата или да се погрижиш да не презапишеш промени по страницата.',
    'pages_draft_edit_active' => [
        'start_a' => ':count потребителя започнаха да редактират настоящата страница',
        'start_b' => ':userName в момента редактира тази страница',
        'time_a' => 'от както страницата беше актуализирана',
        'time_b' => 'в последните :minCount минути',
        'message' => ':start :time. Внимавайте да не попречите на актуализацията на другия!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Определена страница',
    'pages_is_template' => 'Шаблон на страницата',

    // Editor Sidebar
    'toggle_sidebar' => 'Toggle Sidebar',
    'page_tags' => 'Тагове на страницата',
    'chapter_tags' => 'Тагове на главата',
    'book_tags' => 'Тагове на книгата',
    'shelf_tags' => 'Тагове на рафта',
    'tag' => 'Таг',
    'tags' =>  'Тагове',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Име на таг',
    'tag_value' => 'Съдържание на тага (Опционално)',
    'tags_explain' => "Добавете няколко тага за да категоризирате по добре вашето съдържание. \n Може да добавите съдържание на таговете за по-подробна организация.",
    'tags_add' => 'Добави друг таг',
    'tags_remove' => 'Премахни този таг',
    'tags_usages' => 'Общо ползвания на таг',
    'tags_assigned_pages' => 'Присвоен на страници',
    'tags_assigned_chapters' => 'Присвоен на глави',
    'tags_assigned_books' => 'Присвоен на книги',
    'tags_assigned_shelves' => 'Присвоен на рафтове',
    'tags_x_unique_values' => ':count уникални стойности',
    'tags_all_values' => 'Всички стойности',
    'tags_view_tags' => 'Виж тагове',
    'tags_view_existing_tags' => 'Виж съществуващи тагове',
    'tags_list_empty_hint' => 'Таговете могат да бъдат прилагани чрез страничната лента в редактора на страници или по време на редактирането на детайлите за книги, глави или рафтове.',
    'attachments' => 'Прикачени файлове',
    'attachments_explain' => 'Прикачете файлове или линкове, които да са видими на вашата страница. Същите ще бъдат видими във вашето странично поле.',
    'attachments_explain_instant_save' => 'Промените тук се запазват веднага.',
    'attachments_upload' => 'Прикачен файл',
    'attachments_link' => 'Прикачване на линк',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Поставяне на линк',
    'attachments_delete' => 'Сигурни ли сте, че искате да изтриете прикачения файл?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'Няма прикачени фалове',
    'attachments_explain_link' => 'Може да прикачите линк, ако не искате да качвате файл. Този линк може да бъде към друга страница или към файл в облакова пространство.',
    'attachments_link_name' => 'Има на линка',
    'attachment_link' => 'Линк към прикачения файл',
    'attachments_link_url' => 'Линк към файла',
    'attachments_link_url_hint' => 'Url на сайт или файл',
    'attach' => 'Прикачване',
    'attachments_insert_link' => 'Добави линк на прикачен файл към страница',
    'attachments_edit_file' => 'Редактирай файл',
    'attachments_edit_file_name' => 'Име на файл',
    'attachments_edit_drop_upload' => 'Поставете файл или цъкнете тук за да прикачите и обновите',
    'attachments_order_updated' => 'Прикачения файл беше обновен',
    'attachments_updated_success' => 'Данните на прикачения файл бяха обновени',
    'attachments_deleted' => 'Прикачения файл беше изтрит',
    'attachments_file_uploaded' => 'Файлът беше качен успешно',
    'attachments_file_updated' => 'Файлът беше обновен успешно',
    'attachments_link_attached' => 'Линкът беше успешно прикачен към страницата',
    'templates' => 'Шаблони',
    'templates_set_as_template' => 'Страницата е шаблон',
    'templates_explain_set_as_template' => 'Можете да зададете тази страница като шаблон, така че нейното съдържание да бъде използвано при създаването на други страници. Други потребители ще могат да използват този шаблон, ако имат разрешения за преглед на тази страница.',
    'templates_replace_content' => 'Замени съдържанието на страницата',
    'templates_append_content' => 'Добави в края на съдържанието на страницата',
    'templates_prepend_content' => 'Добави в началото на съдържанието на страницата',

    // Profile View
    'profile_user_for_x' => 'Потребител от :time',
    'profile_created_content' => 'Създадено съдържание',
    'profile_not_created_pages' => ':userName не е създал страници',
    'profile_not_created_chapters' => ':userName не е създавал глави',
    'profile_not_created_books' => ':userName не е създавал книги',
    'profile_not_created_shelves' => ':userName не е създавал рафтове',

    // Comments
    'comment' => 'Коментирай',
    'comments' => 'Коментари',
    'comment_add' => 'Добавяне на коментар',
    'comment_placeholder' => 'Напишете коментар',
    'comment_count' => '{0} Няма коментари|{1} 1 коментар|[2,*] :count коментара',
    'comment_save' => 'Запази коментар',
    'comment_new' => 'Нов коментар',
    'comment_created' => 'коментирано :createDiff',
    'comment_updated' => 'Актуализирано :updateDiff от :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'Коментарът е изтрит',
    'comment_created_success' => 'Коментарът е добавен',
    'comment_updated_success' => 'Коментарът е обновен',
    'comment_delete_confirm' => 'Наистина ли искате да изтриете този коментар?',
    'comment_in_reply_to' => 'В отговор на :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Наистина ли искате да изтриете тази версия?',
    'revision_restore_confirm' => 'Сигурни ли сте, че искате да изтриете тази версия? Настоящата страница ще бъде заместена.',
    'revision_cannot_delete_latest' => 'Не може да изтриете последната версия.',

    // Copy view
    'copy_consider' => 'Моля, имай предвид долното при копиране на съдържание.',
    'copy_consider_permissions' => 'Специфичните настройки на привилегиите няма да бъдат копирани.',
    'copy_consider_owner' => 'Ти ще станеш собственикът на цялото копирано съдържание.',
    'copy_consider_images' => 'Файловете на изображенията в страницата няма да бъдат дубликирани и оригиналните изображения ще запазят връзката си със страницата, на която са били качени първоначално.',
    'copy_consider_attachments' => 'Прикачените към страницата обекти няма да бъдат копирани.',
    'copy_consider_access' => 'Смяна на местоположението, собственика или привилегиите може да направи това съдържание достъпно за тези, които не са го виждали преди.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Listed below is all the known content in the system that links to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
