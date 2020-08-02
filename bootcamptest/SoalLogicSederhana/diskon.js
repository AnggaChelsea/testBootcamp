// var a = prompt('masukan uang belanja');
// function diskon(hargaAwal){
//     var diskon;

//     if(a < 80000){
//         diskon = 0.1 * hargaAwal;
//         hargaDiskon = hargaAwal - diskon;
//         console.log('harga diskon 20% menjadi Rp '+diskon(a));
//     }
//     if(a > 80000||70000){
//         diskon = 0.2 * hargaAwal;
//         hargaDiskon = hargaAwal - diskon;
//         console.log('harga diskon 30% menjadi Rp '+diskon(a));
//     }
//     else{
//         console.log('jiakalu mau diskon lebihin uangnya')
//     }
//     return hargaDiskon;
// }

var a = 100000,

function diskon(hargaAwal) {
    var diskon;
    diskon = 0.2 * hargaAwal;
    hargaDiskon = hargaAwal - diskon;
    if (a == 50) {
        diskon = 0.1 * hargaAwal;
        hargaDiskon = hargaAwal - diskon;
    }
    return hargaDiskon;
}
console.log('voucher anda Rp ' + a);
console.log('uang yang harus di bayar itu Rp 80000');
console.log('diskon Rp 20000');
console.log('kembali Rp ' + diskon(a));