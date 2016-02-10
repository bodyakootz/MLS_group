$('.delete_article').on('click', function(evt) {
    evt.preventDefault();
    if (confirm('Подтвердить удаление')) {
        $form = $(this).closest('form');
        $form.trigger('submit');
    } else {
        return false;
    }
});