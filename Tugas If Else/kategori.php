<?php 
$nama = "Nurfadillah Insani";
$tinggi_badan = 1.5;
$berat_badan = 49;
$bmi = ($berat_badan / $tinggi_badan**2);

if ($bmi > 30) {
    echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk obesitas";
}elseif ($bmi > 25) {
    echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk gemuk";
}elseif ($bmi >= 18.5) {
    echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk sedang";
}elseif ($bmi < 18.5) {
    echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus";
}
?>