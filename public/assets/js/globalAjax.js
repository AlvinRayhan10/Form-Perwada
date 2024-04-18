$(document).ready(function () {
    /**
     * Form Submit
     */
    $('#form').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (response) {
                if (response.status == true) {
                    swal.fire({
                        icon: "success",
                        title: "Sukses!",
                        text: response.messages,
                        backdrop: false
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = response.redirect;
                        }
                    });
                }
                else {
                    $.each(response.error, function (key, value) {
                        form.find('input[name=' + key + '], select[name=' + key + ']').addClass('is-invalid').focus().next().text(value);
                        form.find('input[name=' + key + '], select[name=' + key + ']').on('keyup change', function () {
                            $(this).removeClass('is-invalid').next().text('');
                        });
                    });
                }
            }
        });
    });

    /**
     * Form Submit With Files
     */
    $('#form-has-file').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var data = new FormData(form[0]);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            contentType: false,
            processData: false,
            dataType: "JSON",
            data: data,
            success: function (response) {
                if (response.status == true) {
                    swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: response.messages,
                        backdrop: false
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = response.redirect;
                        }
                    });
                }
                else {
                    $.each(response.error, function (key, value) {
                        if (key.includes('.')) {
                            document.getElementById(key).classList.add('is-invalid');
                            document.getElementById(key).parentNode.lastChild.textContent = value;

                            document.getElementById(key).addEventListener('keyup', function () {
                                this.classList.remove('is-invalid');
                                this.parentNode.lastChild.textContent = '';
                            });
                        } else {
                            if (form.find('input[name=' + key + '], select[name=' + key + ']').next().next().length) {
                                form.find('input[name=' + key + '], select[name=' + key + ']').addClass('is-invalid').focus().next().next().text(value);
                            }
                            else {
                                form.find('input[name=' + key + '], select[name=' + key + ']').addClass('is-invalid').focus().next().text(value);
                            }
                            form.find('input[name=' + key + '], select[name=' + key + ']').on('keyup change', function () {
                                if ($(this).next().next().length) {
                                    $(this).removeClass('is-invalid').next().next().text('');
                                }
                                else {
                                    $(this).removeClass('is-invalid').next().text('');
                                }
                            });
                        }

                    });
                }
            }
        });
    });

    /**
     * Delete Action
     */
    $('body').on('click', '#delete_button', function () {
        if (typeof $(this).data('target') != 'undefined') {
            Swal.fire({
                title: $(this).html() + ' ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#008cff',
                cancelButtonColor: '#6c757d;',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
                backdrop: false
            }).then((result) => {
                if (result.value) {
                    if (typeof $(this).data('index') != 'undefined') {
                        var data = { target: $(this).data('target'), index: $(this).data('index') }
                    }
                    else {
                        var data = { target: $(this).data('target') }
                    }
                    $.ajax({
                        headers: { 'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content') },
                        type: "DELETE",
                        url: $(this).data('action'),
                        dataType: "JSON",
                        data: data,
                        success: function (response) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: response.messages,
                                backdrop: false
                            }).then((result) => {
                                window.location.href = response.redirect;
                            });
                        }
                    });
                }
            });
        }
        else {
            Swal.fire({
                title: 'Delete Data?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#008cff',
                cancelButtonColor: '#6c757d;',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
                backdrop: false
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: { 'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content') },
                        type: "DELETE",
                        url: $(this).data('action'),
                        dataType: "JSON",
                        success: function (response) {
                            if (response.status == true) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Success!",
                                    text: response.messages,
                                    backdrop: false
                                }).then((result) => {
                                    table.ajax.reload(null, false);
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Delete failed!",
                                    text: response.messages,
                                    backdrop: false
                                });
                            }

                        }
                    });
                }
            });
        }
    });
});
