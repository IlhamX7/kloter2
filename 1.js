function perjalananSales() {
  var Toko = 2;
  var TempatA = 5;
  var TempatD = 1.5;
  var TempatC = 2.5;
  console.log ("Toko - Tempat A     = " + Toko + " KM|Rp " + ((((Toko/2.5)*1)/1)*7000) + "|" + ((Toko/2.5)*1) + " Liter")
  console.log ("Tempat A - Tempat D = " + (TempatA+TempatD+TempatC) + " KM|Rp " + (((((TempatA+TempatD+TempatC)/2.5)*1)/1)*7000) + "|" + ((TempatA+TempatD+TempatC)/2.5)*1 + " Liter")
  console.log ("Tempat D - Tempat C = " + TempatC + " KM|Rp " + ((((TempatC/2.5)*1)/1)*7000) + "|" + ((TempatC/2.5)*1) + " Liter")
  console.log ("Tempat C - Toko     = " + (TempatD+TempatA+Toko) + " KM|Rp " + (((((TempatD+TempatA+Toko)/2.5)*1)/1)*7000) + "|" + (((TempatD+TempatA+Toko)/2.5)*1) + " Liter")
  console.log("Total Jarak = " + (Toko+(TempatA+TempatD+TempatC)+TempatC+(TempatD+TempatA+Toko)) + " KM")
  console.log("Total Harga = Rp " + (((((Toko/2.5)*1)/1)*7000)+(((((TempatA+TempatD+TempatC)/2.5)*1)/1)*7000)+((((TempatC/2.5)*1)/1)*7000)+(((((TempatD+TempatA+Toko)/2.5)*1)/1)*7000)))
  console.log("Total Bensin = " + (((Toko/2.5)*1)+(((TempatA+TempatD+TempatC)/2.5)*1)+((TempatC/2.5)*1)+(((TempatD+TempatA+Toko)/2.5)*1)) + " Liter")
}
perjalananSales();