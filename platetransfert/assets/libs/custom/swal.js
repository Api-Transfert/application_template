/**
 * Created by john on 2/16/2020.
 */
function show_loader(){
    Swal.showLoading();
}
function hide_loader(){
    Swal.close()
}

function swal_confirm(title , message ,callback , btn_options){
    var btn_opt = {};
    btn_options = btn_options || {};
    btn_opt.showCancelButton = btn_options.showCancelButton || true;
    btn_opt.confirmButtonText = btn_options.confirmButtonText || 'Oui';
    btn_opt.cancelButtonText = btn_options.cancelButtonText || 'Non';

    var cb = {};
    callback = callback || {};

    cb.yes = callback.yes || function () { console.log('chosed yes')};
    cb.no  = callback.no  || function () { console.log('chosed no') ;if(typeof custom_btn_by_id !== 'undefined'){ reset_btn_state(); swal.close(); } };

    Swal.fire({
        title: title,
        text: message,
        icon: 'question',
        showCancelButton: btn_opt.showCancelButton,
        confirmButtonText: btn_opt.confirmButtonText,
        cancelButtonText: btn_opt.cancelButtonText,
        allowOutsideClick:function () {
            //reset switch state if no choise is made
            if(typeof custom_btn_by_id !== 'undefined'){
                reset_btn_state();
                swal.close();
            }
        }
    }).then((result) => {
        if (result.value) {
            cb.yes();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            cb.no();
        }
    })
}

function swal_message(title , message , icon , timer){
    Swal.fire({
        title: title,
        text: message,
        icon: icon,
        cancelButtonText: 'Ok',
        timer: timer || 2000
    })
}

function show_message(notif_type , message) {
    message = message || 'message';
    notif_type = notif_type || 'success';

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: notif_type,
        title: message
    })
}