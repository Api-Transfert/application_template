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
    btn_opt.showCancelButton = btn_options.showCancelButton || true;
    btn_opt.confirmButtonText = btn_options.confirmButtonText || 'Oui';
    btn_opt.cancelButtonText = btn_options.cancelButtonText || 'Non';

    var cb = {};
    callback = callback || {};

    cb.yes = callback.yes || function () { console.log('chosed yes')};
    cb.no  = callback.no  || function () { console.log('chosed no')};

    Swal.fire({
        title: title,
        text: message,
        icon: 'warning',
        showCancelButton: btn_opt.showCancelButton,
        confirmButtonText: btn_opt.confirmButtonText,
        cancelButtonText: btn_opt.cancelButtonText
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