<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.company-profile-wrapper {
			font-family: 'Poppins', sans-serif;
			background: #ffffff;
			min-height: 100vh;
			padding: 30px 15px;
		}

		.profile-container {
			max-width: 700px;
			margin: 0 auto;
		}

		.profile-header {
			background: #ffffff;
			border-radius: 12px;
			padding: 25px 20px;
			margin-bottom: 20px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
			text-align: center;
			border: 1px solid #e0e0e0;
		}

		.profile-header h1 {
			font-size: 28px;
			font-weight: 700;
			color: #1a1a2e;
			margin-bottom: 8px;
		}

		.profile-header h2 {
			font-size: 22px;
			font-weight: 600;
			color: #0088cc;
			margin-bottom: 10px;
		}

		.profile-header p {
			font-size: 15px;
			color: #666;
			font-weight: 500;
		}

		.info-grid {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			gap: 15px;
			margin-bottom: 20px;
		}

		.info-card {
			background: #ffffff;
			border-radius: 10px;
			padding: 18px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			border: 1px solid #e0e0e0;
		}

		.info-card:hover {
			transform: translateY(-3px);
			box-shadow: 0 4px 12px rgba(0, 136, 204, 0.2);
		}

		.info-icon {
			width: 40px;
			height: 40px;
			background: #0088cc;
			border-radius: 10px;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 12px;
			font-size: 20px;
			color: white;
		}

		.info-card h3 {
			font-size: 15px;
			font-weight: 600;
			color: #1a1a2e;
			margin-bottom: 8px;
		}

		.info-card p {
			font-size: 13px;
			color: #555;
			line-height: 1.5;
			margin: 0;
		}

		.info-card a {
			color: #0088cc;
			text-decoration: none;
			font-weight: 500;
		}

		.info-card a:hover {
			text-decoration: underline;
		}

		.full-width-card {
			grid-column: 1 / -1;
		}

		.expertise-section {
			background: #ffffff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
			border: 1px solid #e0e0e0;
		}

		.expertise-section h3 {
			font-size: 18px;
			font-weight: 600;
			color: #1a1a2e;
			margin-bottom: 15px;
		}

		.expertise-tags {
			display: flex;
			flex-wrap: wrap;
			gap: 8px;
		}

		.tag {
			background: rgba(0, 136, 204, 0.1);
			color: #0088cc;
			padding: 6px 14px;
			border-radius: 20px;
			font-size: 12px;
			font-weight: 500;
			border: 1px solid rgba(0, 136, 204, 0.3);
		}

		.certification-section {
			background: #ffffff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
			margin-top: 15px;
			text-align: center;
			border: 1px solid #e0e0e0;
		}

		.certification-section h3 {
			font-size: 16px;
			font-weight: 600;
			color: #1a1a2e;
			margin-bottom: 8px;
		}

		.certification-section p {
			font-size: 13px;
			color: #555;
		}

		@media (max-width: 768px) {
			.info-grid {
				grid-template-columns: 1fr;
			}

			.profile-header {
				padding: 20px 15px;
			}

			.profile-header h1 {
				font-size: 22px;
			}

			.profile-header h2 {
				font-size: 18px;
			}

			.full-width-card {
				grid-column: 1;
			}
		}

		/* Certification Gallery */
		.cert-gallery {
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			gap: 15px;
			margin-top: 20px;
		}

		.cert-item {
			background: #ffffff;
			border: 1px solid #e0e0e0;
			border-radius: 8px;
			padding: 15px;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		.cert-item:hover {
			transform: translateY(-3px);
			box-shadow: 0 4px 12px rgba(0, 136, 204, 0.2);
		}

		.cert-item img {
			max-width: 100%;
			height: auto;
			display: block;
		}

		@media (max-width: 768px) {
			.cert-gallery {
				grid-template-columns: repeat(2, 1fr);
				gap: 10px;
			}

			.cert-item {
				padding: 10px;
			}
		}
	</style>
</head>

<body>
	<div class="company-profile-wrapper">
		<div class="profile-container">
			<!-- Header Section -->
			<div class="profile-header">
				<h1>Company Profile</h1>
				<h2>Mysoftheaven (BD) Ltd.</h2>
				<p>Innovating Digital Solutions Since 2010</p>
			</div>

			<!-- Info Grid -->
			<div class="info-grid">
				<!-- Company Overview -->
				<div class="info-card">
					<div class="info-icon">📊</div>
					<h3>Company Overview</h3>
					<p>Private Ltd Company<br>Founded March 2010</p>
				</div>

				<!-- Year Established -->
				<div class="info-card">
					<div class="info-icon">📅</div>
					<h3>Year Established</h3>
					<p>2010</p>
				</div>

				<!-- Managing Director -->
				<div class="info-card">
					<div class="info-icon">👤</div>
					<h3>Managing Director & CEO</h3>
					<p>Engr. Md. Mofakkharul Islam</p>
				</div>

				<!-- Website -->
				<div class="info-card">
					<div class="info-icon">🌐</div>
					<h3>Website</h3>
					<p><a href="https://www.mysoftheaven.com" target="_blank">www.mysoftheaven.com</a></p>
				</div>

				<!-- Email -->
				<div class="info-card">
					<div class="info-icon">✉️</div>
					<h3>Email</h3>
					<p>info@mysoftheaven.com<br>sales@mysoftheaven.com</p>
				</div>

				<!-- Hotline -->
				<div class="info-card">
					<div class="info-icon">📞</div>
					<h3>Hotline</h3>
					<p>+88 01918776608</p>
				</div>

				<!-- Head Office -->
				<div class="info-card">
					<div class="info-icon">📍</div>
					<h3>Head Office</h3>
					<p>P.R.Tower, 924/1, Level 8,<br>Begum Rokeya Sarani, Shewrapara,<br>Mirpur, Dhaka-1216</p>
				</div>

				<!-- Corporate Office -->
				<div class="info-card">
					<div class="info-icon">📍</div>
					<h3>Corporate Office</h3>
					<p>Miami, Florida, USA</p>
				</div>
			</div>

			<!-- Areas of Expertise -->
			<div class="expertise-section full-width-card">
				<h3>Areas of Expertise</h3>
				<div class="expertise-tags">
					<span class="tag">E-Governance</span>
					<span class="tag">Web Development</span>
					<span class="tag">Mobile Apps</span>
					<span class="tag">Digital Marketing</span>
					<span class="tag">ITES</span>
				</div>
			</div>

			<!-- Market Coverage -->
			<div class="expertise-section full-width-card" style="margin-top: 20px;">
				<h3>Market Coverage</h3>
				<div class="expertise-tags">
					<span class="tag">🇧🇩 Bangladesh</span>
					<span class="tag">🇺🇸 USA</span>
					<span class="tag">🇬🇧 UK</span>
					<span class="tag">🇨🇦 Canada</span>
					<span class="tag">🇦🇺 Australia</span>
					<span class="tag">🇸🇦 Saudi Arabia</span>
					<span class="tag">🇦🇪 Dubai</span>
					<span class="tag">🇮🇳 India</span>
					<span class="tag">🇮🇶 Iraq</span>
				</div>
			</div>

			<!-- Certification -->
			<div class="certification-section">
				<h3>International Certification</h3>
				<div class="cert-gallery">
					<div class="cert-item">
						<img src="<?= base_url('membership/1.gif') ?>" alt="Certification 1">
					</div>
					<div class="cert-item">
						<img src="<?= base_url('membership/2.gif') ?>" alt="Certification 2">
					</div>
					<div class="cert-item">
						<img src="<?= base_url('membership/3.gif') ?>" alt="Certification 3">
					</div>
					<div class="cert-item">
						<img src="<?= base_url('membership/4.gif') ?>" alt="Certification 4">
					</div>
					<div class="cert-item">
						<img src="<?= base_url('membership/5.gif') ?>" alt="Certification 5">
					</div>
				</div>
				<div>
					<a href="http://127.0.0.1/mysoftweb/Mysoftheaven-Profile.pdf" class="download-btn" download="">
						<i class="fa fa-download"
							style="padding: 12px;background: #0172B9;border-radius: 50%;color: white;"></i>
						Download Company Profile
					</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>