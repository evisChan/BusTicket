<!DOCTYPE html>
<html>

<head>
	<title>Thank you</title>
	<meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

</head>

<body style="font-family: tahoma; font-size: 12px;">
	<center>
		<table class="wrapper" width="600px"
			style="padding: 0; margin: 0; border-collapse: collapse; border: solid 1px #fd7521;">
			<tr class="header" style="background-color:#484B51;">
				<td style="padding-right:10px;" align="left">
					<a href="<?= base_url() ?>" target="_blank">
						<h4>PEMESANAN TIKET BUS</h4>
					</a>
				</td>
				<td style="padding-right:10px;" align="right">
					<a href="<?= base_url() ?>" target="_blank">
						<img height="45" src="https://cdn4.iconfinder.com/data/icons/dot/256/bus.png" alt="">
					</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p style="text-align: justify; padding: 10px;">
						Dear Customer,<br>
						Thank you for using ALMASAR.
					</p>
					<p style="text-align: justify; padding: 10px;">
						Berikut Ringkasan Pembelian Anda:
					<table width="100%" style="font-size: 14px; margin: 10px;">
						<tr>
							<td>
								Manual Transfer Nomor Rekening
							</td>
							<td>:</td>
							<td>
								<strong>
									<?= $sendmail['nomrek_bank']; ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Atas nama
							</td>
							<td>:</td>
							<td>
								<strong>
									<?= $sendmail['nasabah_bank']; ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Bank Penerima
							</td>
							<td>:</td>
							<td>
								<strong>
									<?= $sendmail['nama_bank']; ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Jumlah yang dibayarkan
							</td>
							<td>:</td>
							<td>
								<?php $total = $count * $sendmail['harga_jadwal'] ?>
								<strong>$
									<?= number_format((float)($total), 0, ",", "."); ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Nomor Pemesanan
							</td>
							<td>:</td>
							<td>
								<strong>
									<?= $sendmail['kd_order']; ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Deskripsi Pembelian
							</td>
							<td>:</td>
							<td>
								<strong>Kode Jadwal
									<?= $sendmail['kd_jadwal'] ?>
								</strong><br>
								<strong>Berangkat
									<?= hari_indo(date('N', strtotime($sendmail['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d', strtotime(''.$sendmail['tgl_berangkat_order'].''))).', '.date('H:i', strtotime($sendmail['jam_berangkat_jadwal'])); ?>
								</strong><br>
								<strong>
									<?= $count; ?> Seat
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Tanggal Pembelian
							</td>
							<td>:</td>
							<td>
								<strong>
									<?= $sendmail['tgl_beli_order']; ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>
								Berlaku sampai
							</td>
							<td>:</td>
							<td>
								<strong>
									<?php $expired = hari_indo(date('N', strtotime($sendmail['expired_order']))).', '.tanggal_indo(date('Y-m-d', strtotime(''.$sendmail['expired_order'].''))).', '.date('H:i', strtotime($sendmail['expired_order']));
									echo $expired; ?>
								</strong>
							</td>
						</tr>
					</table>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table width="100%">
						<tr>
							<td>
								<div class="col-md-12 col-xs-12">
									<h4>Cara Transfer Melalui</h4>
									<div class="hr hr8 hr-double hr-dotted"></div>
									<div class="row">
										<div class="col-md-4">
											<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
												<center>
													<h4>ATM</h4>
												</center>
												<div class="hr hr8 hr-double hr-dotted"></div>
												<ol style="padding:0;">
													<li>Panduan Pembayaran</li>
													<li>Pilih Menu <span class="label">Transaksi Lain</span></li>
													<li>Pilih <span class="label">Transfer</span></li>
													<li>Pilih <span class="label">ke Akun
															<?= $sendmail['nama_bank'];
															; ?>
														</span></li>
													<li>Masukkan Nomor Rekening <span class="label">
															<?= $sendmail['nomrek_bank']; ?>
														</span></li>
													<li>Pilih <span class="label">Benar</span></li>
													<li>Pilih <span class="label">Yes</span></li>
													<li>Ambil bukti pembayaran Anda</li>
													<li>Selesai</li>
												</ol>
											</div>
										</div>
										<div class="col-md-4">
											<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
												<center>
													<h4>MOBILE BANKING</h4>
												</center>
												<div class="hr hr8 hr-double hr-dotted"></div>
												<ol style="padding:0;">
													<li>Masuk ke akun Mobile Banking</li>
													<li>Pilih <span class="label">m-Transfer</span></li>
													<li>Pilih <span class="label">BCA Account</span></li>
													<li>Masukkan Nomor Rekening<span class="label">
															<?= $sendmail['nomrek_bank'] ?>
														</span></li>
													<li>klik <span class="label">Kirim</span></li>
													<li>Informasi VA akan ditampilkan</li>
													<li>klik <span class="label">OK</span></li>
													<li>Masukkan <span class="label">PIN</span></li>
													<li>Mobile Banking</li>
													<li>Bukti pembayaran ditampilkan</li>
													<li>Selesai</li>
												</ol>
											</div>
										</div>
										<div class="col-md-4">
											<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
												<center>
													<h4>INTERNET BANKING</h4>
												</center>
												<div class="hr hr8 hr-double hr-dotted"></div>
												<ol style="padding:0;">
													<li>Pilih <span class="label">Transaksi Dana</span></li>
													<li>Pilih <span class="label">Transfer ke BCA Account</span></li>
													<li> Masukkan Nomor Rekening<span class="label">
															<?= $sendmail['nomrek_bank'] ?>
														</span></li>
													<li></li>
													<li>klik <span class="label">lanjut</span></li>
													<li>Respons Masukan <span class="label">Aplikasi KeyBCA 1</span>
													</li>
													<li>klik <span class="label">Kirim</span></li>
													<li>Bukti pembayaran ditampilkan</li>
													<li>Selesai</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p style="padding:10px;">
						<br>
						Salam hormat,<br>
						<span style="color:#fd7521;"><strong>System Pemesanan Tiket Bus</strong></span>
						<br>
						<br>
					</p>
				</td>
			</tr>
			<tr>

			</tr>
			<tr class="footer" style="font-size: 10px; background-color: #484B51;color:#ffffff;">
				<td style="padding-left:10px; padding-right:10px;">
					<?= date("Y"); ?> &copy; ALMASAR
				</td>
				<td align="right" style="padding-left:10px; padding-right:10px;">
					<img height="30" src="https://cdn4.iconfinder.com/data/icons/dot/256/bus.png" border="0">
				</td>
			</tr>
		</table>
	</center>
</body>

</html>