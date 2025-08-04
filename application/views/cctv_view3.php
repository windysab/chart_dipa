<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CCTV Monitoring - PA Amuntai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
	<style>
		:root {
			/* Light Mode Colors */
			--primary: #6366f1;
			--primary-light: #818cf8;
			--primary-dark: #4f46e5;
			--secondary: #06b6d4;
			--success: #10b981;
			--info: #3b82f6;
			--warning: #f59e0b;
			--danger: #ef4444;
			--dark: #1f2937;
			--light: #f9fafb;
			--gray: #6b7280;
			--gray-light: #e5e7eb;
			--card-bg: #ffffff;
			--body-bg: #f3f4f6;
			--text-primary: #111827;
			--text-secondary: #6b7280;
			--border-color: #e5e7eb;
			
			/* Dark Mode Colors */
			--dark-bg: #0f172a;
			--dark-card: #1e293b;
			--dark-surface: #334155;
			--dark-text: #f1f5f9;
			--dark-text-secondary: #94a3b8;
			--dark-border: #475569;
			
			/* Spacing & Effects */
			--border-radius-sm: 0.5rem;
			--border-radius: 0.75rem;
			--border-radius-lg: 1rem;
			--border-radius-xl: 1.5rem;
			--box-shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
			--box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
			--box-shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
			--box-shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
			--box-shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
			--transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			--transition-fast: all 0.15s ease-out;
			--transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
			
			/* Glassmorphism */
			--glass-bg: rgba(255, 255, 255, 0.1);
			--glass-border: rgba(255, 255, 255, 0.2);
			--backdrop-blur: blur(16px);
		}
		
		/* Dark Mode Theme */
		[data-theme="dark"] {
			--card-bg: var(--dark-card);
			--body-bg: var(--dark-bg);
			--text-primary: var(--dark-text);
			--text-secondary: var(--dark-text-secondary);
			--border-color: var(--dark-border);
			--gray-light: var(--dark-border);
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
			background: var(--body-bg);
			color: var(--text-primary);
			line-height: 1.6;
			margin: 0;
			padding: 0;
			overflow-x: hidden;
			transition: var(--transition);
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		
		/* Typography Improvements */
		h1, h2, h3, h4, h5, h6 {
			font-weight: 700;
			color: var(--text-primary);
			margin-bottom: 0.5rem;
			letter-spacing: -0.025em;
		}
		
		.text-mono {
			font-family: 'JetBrains Mono', 'Fira Code', 'Consolas', monospace;
		}
		
		.text-secondary {
			color: var(--text-secondary) !important;
		}
		
		/* Scrollbar Styling */
		::-webkit-scrollbar {
			width: 8px;
			height: 8px;
		}
		
		::-webkit-scrollbar-track {
			background: var(--gray-light);
			border-radius: 4px;
		}
		
		::-webkit-scrollbar-thumb {
			background: var(--gray);
			border-radius: 4px;
			transition: var(--transition-fast);
		}
		
		::-webkit-scrollbar-thumb:hover {
			background: var(--primary);
		}

		.container-fluid {
			padding: 2rem;
			max-width: 1600px;
			margin: 0 auto;
		}

		/* Header Section */
		.dashboard-header {
			background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 50%, var(--secondary) 100%);
			color: white;
			padding: 2.5rem 0;
			margin-bottom: 2rem;
			border-radius: 0 0 var(--border-radius-xl) var(--border-radius-xl);
			box-shadow: var(--box-shadow-2xl);
			position: relative;
			overflow: hidden;
			text-align: center;
		}

		.dashboard-header::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
						radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
						radial-gradient(circle at 40% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
			pointer-events: none;
		}

		.dashboard-header::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			height: 1px;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
		}

		.header-content {
			position: relative;
			z-index: 2;
		}

		.logo-container {
			width: 90px;
			height: 90px;
			background: var(--glass-bg);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 1.5rem;
			backdrop-filter: var(--backdrop-blur);
			border: 2px solid var(--glass-border);
			transition: var(--transition);
			position: relative;
		}

		.logo-container::before {
			content: '';
			position: absolute;
			inset: -2px;
			border-radius: 50%;
			background: linear-gradient(45deg, rgba(255,255,255,0.3), transparent, rgba(255,255,255,0.3));
			z-index: -1;
			opacity: 0;
			transition: var(--transition);
		}

		.logo-container:hover {
			transform: scale(1.05) rotate(5deg);
			box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
		}

		.logo-container:hover::before {
			opacity: 1;
		}

		.logo-container i {
			font-size: 2.5rem;
			color: white;
			transition: var(--transition);
		}

		.logo-container:hover i {
			transform: scale(1.1);
		}

		.theme-toggle {
			position: absolute;
			top: 1rem;
			right: 1rem;
			background: var(--glass-bg);
			border: 1px solid var(--glass-border);
			border-radius: var(--border-radius);
			padding: 0.75rem;
			color: white;
			cursor: pointer;
			transition: var(--transition);
			backdrop-filter: var(--backdrop-blur);
			z-index: 10;
		}

		.theme-toggle:hover {
			background: rgba(255, 255, 255, 0.2);
			transform: scale(1.05);
		}

		.dashboard-title {
			font-size: 2.5rem;
			font-weight: 800;
			margin-bottom: 0.5rem;
			letter-spacing: -0.02em;
			text-shadow: 0 2px 4px rgba(0,0,0,0.1);
		}

		.dashboard-subtitle {
			font-size: 1.1rem;
			opacity: 0.9;
			font-weight: 400;
			letter-spacing: 0.025em;
		}

		/* Stats Section */
		.stats-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
		}

		.stat-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.5rem;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			display: flex;
			flex-direction: column;
			height: 100%;
		}

		.stat-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.stat-card::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 4px;
		}

		.stat-card.primary::after {
			background: linear-gradient(to right, var(--primary-dark), var(--primary-light));
		}

		.stat-card.success::after {
			background: linear-gradient(to right, #059669, var(--success));
		}

		.stat-card.warning::after {
			background: linear-gradient(to right, #d97706, var(--warning));
		}

		.stat-card.info::after {
			background: linear-gradient(to right, #0284c7, var(--info));
		}

		.stat-icon {
			width: 60px;
			height: 60px;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 50%;
			font-size: 1.5rem;
			margin-bottom: 1rem;
			color: white;
		}

		.stat-card.primary .stat-icon {
			background: linear-gradient(135deg, var(--primary-dark), var(--primary));
		}

		.stat-card.success .stat-icon {
			background: linear-gradient(135deg, #059669, var(--success));
		}

		.stat-card.warning .stat-icon {
			background: linear-gradient(135deg, #d97706, var(--warning));
		}

		.stat-card.info .stat-icon {
			background: linear-gradient(135deg, #0284c7, var(--info));
		}

		.stat-value {
			font-size: 2.5rem;
			font-weight: 700;
			margin-bottom: 0.5rem;
			color: var(--dark);
		}

		.stat-label {
			font-size: 1rem;
			color: var(--gray);
			margin-bottom: 0.25rem;
		}

		.stat-description {
			font-size: 0.875rem;
			color: var(--gray);
			margin-top: auto;
		}

		/* CCTV Section */
		.section-title {
			margin-bottom: 1.5rem;
			position: relative;
			padding-left: 1rem;
			font-size: 1.5rem;
			font-weight: 600;
			color: var(--dark);
			display: flex;
			align-items: center;
			gap: 0.75rem;
		}

		.section-title::before {
			content: '';
			position: absolute;
			left: 0;
			top: 50%;
			transform: translateY(-50%);
			width: 4px;
			height: 70%;
			background: var(--primary);
			border-radius: 2px;
		}

		.section-title i {
			color: var(--primary);
		}

		.cctv-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2.5rem;
		}

		.cctv-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			overflow: hidden;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			position: relative;
		}

		.cctv-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.cctv-header {
			padding: 1rem;
			background: var(--primary);
			color: white;
			font-weight: 600;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.cctv-title {
			display: flex;
			align-items: center;
			gap: 0.5rem;
			font-size: 1rem;
		}

		.cctv-status {
			display: inline-flex;
			align-items: center;
			padding: 0.75rem 1.25rem;
			border-radius: var(--border-radius);
			font-size: 0.875rem;
			font-weight: 600;
			gap: 0.75rem;
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			letter-spacing: 0.025em;
			text-transform: uppercase;
		}

		.cctv-status::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
			transition: var(--transition);
		}

		.cctv-status:hover::before {
			left: 100%;
		}

		.status-online {
			background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(34, 197, 94, 0.05));
			color: var(--success);
			border: 1px solid rgba(34, 197, 94, 0.3);
			box-shadow: 0 4px 12px rgba(34, 197, 94, 0.1);
		}

		.status-online:hover {
			background: linear-gradient(135deg, rgba(34, 197, 94, 0.15), rgba(34, 197, 94, 0.08));
			border-color: rgba(34, 197, 94, 0.4);
			transform: scale(1.05);
			box-shadow: 0 6px 20px rgba(34, 197, 94, 0.2);
		}

		.status-offline {
			background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(239, 68, 68, 0.05));
			color: var(--danger);
			border: 1px solid rgba(239, 68, 68, 0.3);
			box-shadow: 0 4px 12px rgba(239, 68, 68, 0.1);
		}

		.status-offline:hover {
			background: linear-gradient(135deg, rgba(239, 68, 68, 0.15), rgba(239, 68, 68, 0.08));
			border-color: rgba(239, 68, 68, 0.4);
			transform: scale(1.05);
			box-shadow: 0 6px 20px rgba(239, 68, 68, 0.2);
		}

		.status-indicator {
			width: 10px;
			height: 10px;
			border-radius: 50%;
			background: currentColor;
			position: relative;
			animation: pulse 2s infinite;
		}

		.status-indicator::before {
			content: '';
			position: absolute;
			inset: -3px;
			border-radius: 50%;
			background: currentColor;
			opacity: 0.3;
			animation: ripple 2s infinite;
		}

		.cctv-status i {
			font-size: 0.625rem;
			margin-right: 0.25rem;
			animation: pulse 1.5s infinite;
		}

		@keyframes pulse {
			0%, 100% {
				opacity: 1;
				transform: scale(1);
			}
			50% {
				opacity: 0.7;
				transform: scale(0.95);
			}
		}

		@keyframes ripple {
			0% {
				transform: scale(0.8);
				opacity: 0.8;
			}
			100% {
				transform: scale(2);
				opacity: 0;
			}
		}

		.cctv-body {
			position: relative;
			padding-top: 56.25%;
			/* 16:9 Aspect Ratio */
			height: 0;
			overflow: hidden;
			background: linear-gradient(135deg, #000000, #1a1a1a);
			border-radius: 0 0 var(--border-radius) var(--border-radius);
		}

		.cctv-body::before {
			content: '';
			position: absolute;
			inset: 0;
			background: linear-gradient(45deg, transparent, rgba(255,255,255,0.05), transparent);
			opacity: 0;
			transition: var(--transition);
			z-index: 1;
			pointer-events: none;
		}

		.cctv-card:hover .cctv-body::before {
			opacity: 1;
		}

		.cctv-iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
			transition: var(--transition);
			z-index: 2;
		}

		.video-placeholder {
			position: absolute;
			inset: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background: linear-gradient(135deg, var(--dark-bg), var(--dark-card));
			color: var(--text-secondary);
			z-index: 1;
		}

		.video-placeholder i {
			font-size: 4rem;
			margin-bottom: 1rem;
			opacity: 0.5;
			animation: pulse 2s infinite;
		}

		.video-placeholder .text {
			font-size: 1.1rem;
			font-weight: 500;
			text-align: center;
		}

		/* Visitor Counter */
		.visitor-counter {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.25rem;
			margin-bottom: 2rem;
			box-shadow: var(--box-shadow);
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 2rem;
		}

		.visitor-counter-item {
			display: flex;
			align-items: center;
			gap: 0.75rem;
		}

		.visitor-counter-icon {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			font-size: 1rem;
		}

		.visitor-counter-item:nth-child(1) .visitor-counter-icon {
			background: linear-gradient(135deg, var(--primary-dark), var(--primary));
		}

		.visitor-counter-item:nth-child(2) .visitor-counter-icon {
			background: linear-gradient(135deg, #0284c7, var(--info));
		}

		.visitor-counter-item:nth-child(3) .visitor-counter-icon {
			background: linear-gradient(135deg, #059669, var(--success));
		}

		.visitor-counter-content {
			display: flex;
			flex-direction: column;
		}

		.visitor-counter-label {
			font-size: 0.875rem;
			color: var(--gray);
		}

		.visitor-counter-value {
			font-size: 1.25rem;
			font-weight: 600;
			color: var(--dark);
		}

		/* Case Data Section */
		.case-header {
			background: linear-gradient(135deg, var(--dark), #334155);
			color: white;
			border-radius: var(--border-radius);
			padding: 1.5rem;
			margin-bottom: 2rem;
			box-shadow: var(--box-shadow);
			text-align: center;
		}

		.case-header h2 {
			font-size: 1.5rem;
			font-weight: 600;
			margin: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 0.75rem;
		}

		/* Card Styles */
		.card {
			background: var(--card-bg);
			border: 1px solid var(--border-color);
			border-radius: var(--border-radius-lg);
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			overflow: hidden;
			position: relative;
			backdrop-filter: blur(10px);
		}

		.card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 3px;
			background: linear-gradient(90deg, var(--primary), var(--secondary), var(--primary-light));
			transform: scaleX(0);
			transition: var(--transition);
			transform-origin: left;
		}

		.card:hover {
			transform: translateY(-8px) scale(1.02);
			box-shadow: var(--box-shadow-xl);
			border-color: var(--primary-light);
		}

		.card:hover::before {
			transform: scaleX(1);
		}

		.card-body {
			padding: 1.5rem;
			position: relative;
		}

		.card-title {
			font-weight: 600;
			color: var(--text-primary);
			margin-bottom: 0.75rem;
			font-size: 1.1rem;
		}

		.card-text {
			color: var(--text-secondary);
			line-height: 1.6;
		}

		/* Glassmorphism Card Variant */
		.card-glass {
			background: var(--glass-bg);
			backdrop-filter: var(--backdrop-blur);
			border: 1px solid var(--glass-border);
			color: white;
		}

		.card-glass .card-title,
		.card-glass .card-text {
			color: white;
		}

		.card-glass:hover {
			background: rgba(255, 255, 255, 0.15);
			border-color: rgba(255, 255, 255, 0.3);
		}

		/* Data Cards */
		.data-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
			gap: 2rem;
			margin-bottom: 3rem;
		}

		.data-card {
			background: var(--card-bg);
			border: 1px solid var(--border-color);
			border-radius: var(--border-radius-lg);
			padding: 2rem;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			height: 100%;
			display: flex;
			flex-direction: column;
		}

		.data-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 4px;
			height: 100%;
			background: linear-gradient(180deg, var(--primary), var(--secondary));
			transition: var(--transition);
			opacity: 0.8;
		}

		.data-card::after {
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 100px;
			height: 100px;
			background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
			opacity: 0.05;
			transition: var(--transition);
			transform: translate(50%, -50%);
		}

		.data-card:hover {
			transform: translateY(-10px) scale(1.02);
			box-shadow: var(--box-shadow-2xl);
			border-color: var(--primary-light);
		}

		.data-card:hover::before {
			width: 6px;
			opacity: 1;
		}

		.data-card:hover::after {
			opacity: 0.1;
			transform: translate(30%, -30%) scale(1.2);
		}

		.data-card-title {
			font-size: 1.125rem;
			font-weight: 600;
			color: var(--text-primary);
			margin-bottom: 1.5rem;
			display: flex;
			align-items: center;
			gap: 0.75rem;
			position: relative;
			z-index: 2;
		}

		.data-card-title i {
			color: var(--primary);
			font-size: 1.25rem;
		}

		.chart-container {
			flex: 1;
			position: relative;
			height: 350px;
			z-index: 2;
		}

		/* Tables */
		.table-card {
			background: var(--card-bg);
			border: 1px solid var(--border-color);
			border-radius: var(--border-radius-lg);
			overflow: hidden;
			box-shadow: var(--box-shadow);
			margin-bottom: 2rem;
			transition: var(--transition);
		}

		.table-card:hover {
			box-shadow: var(--box-shadow-lg);
			border-color: var(--primary-light);
		}

		.table-card-title {
			padding: 1.5rem 2rem;
			font-size: 1.25rem;
			font-weight: 700;
			color: var(--text-primary);
			background: linear-gradient(135deg, var(--primary), var(--primary-light));
			color: white;
			display: flex;
			align-items: center;
			gap: 0.75rem;
			position: relative;
			overflow: hidden;
		}

		.table-card-title::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
			transition: var(--transition-slow);
		}

		.table-card:hover .table-card-title::before {
			left: 100%;
		}

		.table-card-title i {
			color: white;
			font-size: 1.5rem;
		}

		.table-card-body {
			padding: 0;
			overflow-x: auto;
		}

		.modern-table {
			width: 100%;
			border-collapse: separate;
			border-spacing: 0;
			min-width: 600px;
		}

		.modern-table th {
			background: linear-gradient(135deg, var(--gray-light), #f1f5f9);
			color: var(--text-primary);
			font-weight: 700;
			padding: 1.25rem 1.5rem;
			text-align: left;
			font-size: 0.875rem;
			letter-spacing: 0.025em;
			text-transform: uppercase;
			position: relative;
		}

		.modern-table th::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			height: 2px;
			background: linear-gradient(90deg, var(--primary), var(--secondary));
		}

		.modern-table td {
			padding: 1.25rem 1.5rem;
			border-bottom: 1px solid var(--border-color);
			vertical-align: middle;
			color: var(--text-secondary);
			font-size: 0.9rem;
			position: relative;
		}

		.modern-table tr:last-child td {
			border-bottom: none;
		}

		.modern-table tbody tr {
			transition: var(--transition);
			position: relative;
		}

		.modern-table tbody tr::before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 4px;
			height: 100%;
			background: var(--primary);
			transform: scaleY(0);
			transition: var(--transition);
		}

		.modern-table tbody tr:hover {
			background: linear-gradient(135deg, rgba(99, 102, 241, 0.02), rgba(99, 102, 241, 0.05));
			transform: translateX(5px);
		}

		.modern-table tbody tr:hover::before {
			transform: scaleY(1);
		}

		.modern-table tbody tr:hover td {
			color: var(--text-primary);
			font-weight: 500;
		}

		/* Table responsive wrapper */
		.table-responsive {
			position: relative;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
		}

		.table-responsive::-webkit-scrollbar {
			height: 6px;
		}

		.table-responsive::-webkit-scrollbar-track {
			background: var(--gray-light);
			border-radius: 3px;
		}

		.table-responsive::-webkit-scrollbar-thumb {
			background: var(--primary);
			border-radius: 3px;
		}

		.table-responsive::-webkit-scrollbar-thumb:hover {
			background: var(--primary-dark);
		}

		/* Circle Stats */
		.circle-stats-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2.5rem;
		}

		.circle-stat {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}

		.circle-stat-value-container {
			width: 140px;
			height: 140px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 1rem;
			box-shadow: var(--box-shadow);
			position: relative;
			transition: var(--transition);
		}

		.circle-stat-value-container:hover {
			transform: scale(1.05);
			box-shadow: var(--box-shadow-lg);
		}

		.circle-stat-value-container::before {
			content: '';
			position: absolute;
			top: -5px;
			left: -5px;
			right: -5px;
			bottom: -5px;
			border-radius: 50%;
			background: inherit;
			opacity: 0.4;
			filter: blur(10px);
			z-index: -1;
		}

		.circle-stat-value {
			font-size: 2rem;
			font-weight: 700;
			color: white;
		}

		.circle-stat-label {
			font-size: 1rem;
			font-weight: 500;
			color: var(--dark);
		}

		.circle-stat-1 .circle-stat-value-container {
			background: linear-gradient(135deg, var(--primary-dark), var(--primary));
		}

		.circle-stat-2 .circle-stat-value-container {
			background: linear-gradient(135deg, #0284c7, var(--info));
		}

		.circle-stat-3 .circle-stat-value-container {
			background: linear-gradient(135deg, #d97706, var(--warning));
		}

		.circle-stat-4 .circle-stat-value-container {
			background: linear-gradient(135deg, #dc2626, var(--danger));
		}

		/* Footer */
		.dashboard-footer {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.5rem;
			margin-top: 3rem;
			text-align: center;
			box-shadow: var(--box-shadow);
		}

		/* Animations */
		.fade-in {
			animation: fadeIn 0.6s ease-in-out;
		}

		.fade-in-delay-1 {
			animation: fadeIn 0.6s ease-in-out 0.1s both;
		}

		.fade-in-delay-2 {
			animation: fadeIn 0.6s ease-in-out 0.2s both;
		}

		.fade-in-delay-3 {
			animation: fadeIn 0.6s ease-in-out 0.3s both;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(20px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		/* Responsive Design */
		@media (max-width: 1400px) {
			.container-fluid {
				padding: 1.5rem;
			}
		}

		@media (max-width: 1200px) {
			.data-grid {
				grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			}
			
			.cctv-grid {
				grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
			}
		}

		@media (max-width: 992px) {
			.dashboard-header {
				padding: 2rem;
			}

			.header-logo {
				margin-bottom: 1.5rem; /* Maintain bottom margin on smaller screens */
			}

			.circle-stats-grid {
				grid-template-columns: repeat(2, 1fr);
			}

			.header-title {
				font-size: 2rem;
			}
		}

		@media (max-width: 768px) {
			.container-fluid {
				padding: 1rem;
			}

			.dashboard-header {
				padding: 2rem 0;
				margin-bottom: 1.5rem;
				border-radius: 0 0 var(--border-radius) var(--border-radius);
			}

			.theme-toggle {
				top: 0.75rem;
				right: 0.75rem;
				padding: 0.5rem;
			}

			.logo-container {
				width: 70px;
				height: 70px;
				margin-bottom: 1rem;
			}

			.logo-container i {
				font-size: 2rem;
			}

			.dashboard-title {
				font-size: 2rem;
			}

			.dashboard-subtitle {
				font-size: 1rem;
			}

			.stats-grid {
				grid-template-columns: 1fr;
				gap: 1rem;
			}

			.cctv-grid {
				grid-template-columns: 1fr;
				gap: 1rem;
			}

			.data-grid {
				grid-template-columns: 1fr;
				gap: 1.5rem;
			}

			.data-card {
				padding: 1.5rem;
			}

			.section-title {
				font-size: 1.25rem;
			}

			.visitor-counter {
				flex-direction: column;
				align-items: center;
				gap: 1rem;
				padding: 1rem;
			}

			.circle-stats-grid {
				grid-template-columns: repeat(2, 1fr);
				gap: 1rem;
			}

			.circle-stat-value-container {
				width: 120px;
				height: 120px;
			}

			.circle-stat-value {
				font-size: 1.75rem;
			}

			.table-card-title {
				padding: 1rem 1.5rem;
				font-size: 1.1rem;
			}

			.modern-table th,
			.modern-table td {
				padding: 1rem;
				font-size: 0.8rem;
			}
		}

		@media (max-width: 576px) {
			.stats-grid {
				grid-template-columns: 1fr;
			}

			.cctv-grid {
				grid-template-columns: 1fr;
			}

			.data-grid {
				grid-template-columns: 1fr;
			}

			.circle-stats-grid {
				grid-template-columns: repeat(2, 1fr);
			}
		}

		@media (max-width: 480px) {
			.dashboard-title {
				font-size: 1.75rem;
			}

			.circle-stats-grid {
				grid-template-columns: 1fr;
			}

			.data-card-value {
				font-size: 2rem;
			}

			.visitor-counter-item {
				flex-direction: column;
				text-align: center;
				gap: 0.5rem;
			}
		}

		/* Utility Classes */
		.fade-in {
			animation: fadeIn 0.8s ease-out;
		}

		.slide-up {
			animation: slideUp 0.6s ease-out;
		}

		.scale-in {
			animation: scaleIn 0.5s ease-out;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}
			to {
				opacity: 1;
			}
		}

		@keyframes slideUp {
			from {
				transform: translateY(30px);
				opacity: 0;
			}
			to {
				transform: translateY(0);
				opacity: 1;
			}
		}

		@keyframes scaleIn {
			from {
				transform: scale(0.9);
				opacity: 0;
			}
			to {
				transform: scale(1);
				opacity: 1;
			}
		}

		/* Loading States */
		.loading {
			position: relative;
			overflow: hidden;
		}

		.loading::after {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
			animation: shimmer 1.5s infinite;
		}

		@keyframes shimmer {
			0% {
				left: -100%;
			}
			100% {
				left: 100%;
			}
		}

		/* Focus States for Accessibility */
		.theme-toggle:focus,
		.cctv-status:focus {
			outline: 2px solid var(--primary);
			outline-offset: 2px;
		}

		/* Print Styles */
		@media print {
			.theme-toggle {
				display: none;
			}
			
			.dashboard-header {
				background: var(--primary) !important;
				-webkit-print-color-adjust: exact;
			}
			
			.card,
			.data-card {
				box-shadow: none;
				border: 1px solid #ddd;
			}
		}
	</style>
</head>

<body data-theme="light">
	<div class="container-fluid">
		<!-- Header Section -->
		<div class="dashboard-header fade-in">
			<button class="theme-toggle" onclick="toggleTheme()" title="Toggle Dark Mode">
				<i class="fas fa-moon" id="theme-icon"></i>
			</button>
			<div class="header-content">
				<div class="logo-container">
					<i class="fas fa-video"></i>
				</div>
				<h1 class="dashboard-title">MONITORING DASHBOARD</h1>
				<p class="dashboard-subtitle">PENGADILAN AGAMA AMUNTAI KELAS IB</p>
			</div>
		</div>

		<!-- Stats Section -->
		<div class="stats-grid fade-in-delay-1">
			<div class="stat-card primary slide-up" style="animation-delay: 0.1s;">
				<div class="stat-icon">
					<i class="fas fa-folder-open"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Total Perkara</div>
				<div class="stat-description">Total perkara bulan <?php echo date('F Y', strtotime('first day of last month')); ?></div>
			</div>
			<div class="stat-card success slide-up" style="animation-delay: 0.2s;">
				<div class="stat-icon">
					<i class="fas fa-gavel"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($jumlah_perkara_diputus, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Perkara Diputus</div>
				<div class="stat-description">Perkara yang telah diputuskan</div>
			</div>
			<div class="stat-card warning slide-up" style="animation-delay: 0.3s;">
				<div class="stat-icon">
					<i class="fas fa-balance-scale"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($sisa_perkara, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Sisa Perkara</div>
				<div class="stat-description">Perkara yang masih dalam proses</div>
			</div>
			<div class="stat-card info slide-up" style="animation-delay: 0.4s;">
				<div class="stat-icon">
					<i class="fas fa-users"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($daily_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Pengunjung Hari Ini</div>
				<div class="stat-description">Total pengunjung dashboard ini</div>
			</div>
		</div>

		<!-- CCTV Section -->
		<h2 class="section-title slide-up"><i class="fas fa-video"></i> Pantauan CCTV Live</h2>
		<div class="cctv-grid fade-in-delay-2">
			<?php if (isset($links)) : ?>
				<?php
				$icons = [
					'Halaman Parkir' => 'fas fa-car',
					'Ruang Tunggu' => 'fas fa-couch',
					'PTSP' => 'fas fa-info-circle',
				];
				?>
				<?php foreach ($links as $name => $url): ?>
					<div class="cctv-card">
						<div class="cctv-header">
							<div class="cctv-title">
								<i class="<?php echo isset($icons[$name]) ? $icons[$name] : 'fas fa-video'; ?>"></i>
								<?php echo ucfirst(str_replace('_', ' ', $name)); ?>
							</div>
							<div class="cctv-status">
								<i class="fas fa-circle"></i> Live
							</div>
						</div>
						<div class="cctv-body">
							<iframe src="<?php echo $url; ?>" allowfullscreen class="cctv-iframe"></iframe>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<!-- Visitor Counter -->
		<div class="visitor-counter fade-in-delay-2">
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon">
					<i class="fas fa-users"></i>
				</div>
				<div class="visitor-counter-content">
					<div class="visitor-counter-label">Pengunjung Hari Ini</div>
					<div class="visitor-counter-value"><?php echo htmlspecialchars($daily_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
			</div>
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon">
					<i class="fas fa-calendar-alt"></i>
				</div>
				<div class="visitor-counter-content">
					<div class="visitor-counter-label">Bulan Ini</div>
					<div class="visitor-counter-value"><?php echo htmlspecialchars($monthly_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
			</div>
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon">
					<i class="fas fa-chart-line"></i>
				</div>
				<div class="visitor-counter-content">
					<div class="visitor-counter-label">Total Pengunjung</div>
					<div class="visitor-counter-value"><?php echo htmlspecialchars($total_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
			</div>
		</div>

		<!-- Case Data Section -->
		<div class="case-header fade-in-delay-2">
			<h2><i class="fas fa-balance-scale"></i> KEADAAN PERKARA S/D <?php echo date('F Y', strtotime('first day of last month')); ?></h2>
		</div>

		<!-- Circle Stats -->
		<div class="circle-stats-grid fade-in-delay-3">
			<div class="circle-stat circle-stat-1">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
				<div class="circle-stat-label">Total Perkara</div>
			</div>
			<div class="circle-stat circle-stat-2">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_ecourt, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
				<div class="circle-stat-label">Perkara e-Court</div>
			</div>
			<div class="circle-stat circle-stat-3">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo number_format($total_perkara_data->persen_perkara_ecourt) . '%'; ?></div>
				</div>
				<div class="circle-stat-label">Persentase e-Court</div>
			</div>
			<div class="circle-stat circle-stat-4">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_non_ecourt, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
				<div class="circle-stat-label">Perkara Non e-Court</div>
			</div>
		</div>

		<!-- Charts -->
		<div class="data-grid fade-in-delay-3">
			<div class="data-card slide-up" style="animation-delay: 0.7s;">
				<h3 class="data-card-title"><i class="fas fa-chart-pie"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h3>
				<div class="chart-container">
					<canvas id="donutChart"></canvas>
				</div>
			</div>
			<div class="data-card slide-up" style="animation-delay: 0.8s;">
				<h3 class="data-card-title"><i class="fas fa-handshake"></i> Penyelesaian Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h3>
				<div class="chart-container">
					<canvas id="mediasiChart"></canvas>
				</div>
			</div>
		</div>

		<div class="data-grid fade-in-delay-3">
			<div class="data-card slide-up" style="animation-delay: 0.9s;">
				<h3 class="data-card-title"><i class="fas fa-balance-scale"></i> Penanganan Perkara E-court</h3>
				<div class="chart-container">
					<canvas id="efilingChart"></canvas>
				</div>
			</div>
		</div>

		<!-- Tables -->
		<div class="row fade-in-delay-3">
			<div class="col-md-6">
				<div class="table-card scale-in" style="animation-delay: 1.0s;">
					<div class="table-card-title">
						<i class="fas fa-list-alt"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?>
					</div>
					<div class="table-card-body">
						<table class="modern-table">
							<thead>
								<tr>
									<th>Jenis Perkara</th>
									<th>Jumlah</th>
									<th>Persentase</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$previous_month = date('Y-m', strtotime('first day of last month'));
								$filtered_chart_data = array_filter($chart_data, function ($data) use ($previous_month) {
									$data_month = isset($data->tanggal_pendaftaran) ? date('Y-m', strtotime($data->tanggal_pendaftaran)) : '';
									return $data_month == $previous_month;
								});

								$grouped_data = [];
								foreach ($filtered_chart_data as $data) {
									if (!isset($grouped_data[$data->jenis_perkara_nama])) {
										$grouped_data[$data->jenis_perkara_nama] = 0;
									}
									$grouped_data[$data->jenis_perkara_nama] += $data->jumlah_perkara;
								}

								$total_perkara = array_sum($grouped_data);
								foreach ($grouped_data as $jenis_perkara_nama => $jumlah_perkara): ?>
									<tr>
										<td><?php echo htmlspecialchars($jenis_perkara_nama, ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($jumlah_perkara, ENT_QUOTES, 'UTF-8'); ?></td>
										<td>
											<?php
											if ($total_perkara > 0) {
												echo number_format(($jumlah_perkara / $total_perkara * 100), 2) . '%';
											} else {
												echo '0.00%';
											}
											?>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="table-card scale-in" style="animation-delay: 1.1s;">
					<div class="table-card-title">
						<i class="fas fa-handshake"></i> Data Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?>
					</div>
					<div class="table-card-body">
						<table class="modern-table">
							<thead>
								<tr>
									<th>Hasil Mediasi</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><i class="fas fa-times-circle text-danger"></i> Tidak Dapat Dilaksanakan</td>
									<td><?php echo $mediasi_data['D']; ?></td>
								</tr>
								<tr>
									<td><i class="fas fa-thumbs-down text-warning"></i> Tidak Berhasil</td>
									<td><?php echo $mediasi_data['T']; ?></td>
								</tr>
								<tr>
									<td><i class="fas fa-adjust text-info"></i> Berhasil Sebagian</td>
									<td><?php echo $mediasi_data['S']; ?></td>
								</tr>
								<tr>
									<td><i class="fas fa-check-circle text-success"></i> Berhasil Dengan Pencabutan</td>
									<td><?php echo $mediasi_data['Y2']; ?></td>
								</tr>
								<tr>
									<td><i class="fas fa-award text-primary"></i> Berhasil Dengan Akta Perdamaian</td>
									<td><?php echo $mediasi_data['Y1']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Counter -->
		<div class="dashboard-footer fade-in-delay-3">
			<div id="histats_counter"></div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
		// Dark Mode Toggle
		function toggleTheme() {
			const body = document.body;
			const themeIcon = document.getElementById('theme-icon');
			const currentTheme = body.getAttribute('data-theme');
			
			if (currentTheme === 'light') {
				body.setAttribute('data-theme', 'dark');
				themeIcon.className = 'fas fa-sun';
				localStorage.setItem('theme', 'dark');
			} else {
				body.setAttribute('data-theme', 'light');
				themeIcon.className = 'fas fa-moon';
				localStorage.setItem('theme', 'light');
			}
		}

		// Load saved theme
		function loadTheme() {
			const savedTheme = localStorage.getItem('theme') || 'light';
			const body = document.body;
			const themeIcon = document.getElementById('theme-icon');
			
			body.setAttribute('data-theme', savedTheme);
			themeIcon.className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
		}

		// Smooth scroll animations
		function observeElements() {
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.style.opacity = '1';
						entry.target.style.transform = 'translateY(0)';
					}
				});
			}, {
				threshold: 0.1
			});

			document.querySelectorAll('.card, .data-card').forEach(el => {
				el.style.opacity = '0';
				el.style.transform = 'translateY(20px)';
				el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
				observer.observe(el);
			});
		}

		document.addEventListener('DOMContentLoaded', function() {
			loadTheme();
			observeElements();
			
			// Set chart defaults
			Chart.defaults.font.family = "'Inter', sans-serif";
			Chart.defaults.color = '#64748b';
			
			// Debug data to verify it exists
			console.log("Chart data:", <?php echo json_encode($chart_data); ?>);
			console.log("Mediasi data:", <?php echo json_encode($mediasi_data); ?>);
			console.log("Total perkara data:", <?php echo json_encode($total_perkara_data); ?>);
			
			try {
				// Process data for pie chart
				const perkaraData = <?php echo json_encode($chart_data); ?>;
				const previousMonth = "<?php echo date('Y-m', strtotime('first day of last month')); ?>";
				
				// Filter chart data for previous month
				const filteredChartData = perkaraData.filter(function(data) {
					const dataMonth = data.tanggal_pendaftaran ? 
						data.tanggal_pendaftaran.substring(0, 7) : '';
					return dataMonth === previousMonth;
				});
				
				// Group data by jenis_perkara_nama
				const groupedData = {};
				filteredChartData.forEach(function(data) {
					if (!groupedData[data.jenis_perkara_nama]) {
						groupedData[data.jenis_perkara_nama] = 0;
					}
					groupedData[data.jenis_perkara_nama] += parseInt(data.jumlah_perkara);
				});
				
				// Extract labels and values
				const labels = Object.keys(groupedData);
				const values = Object.values(groupedData);
				
				// Log processed data
				console.log("Processed labels:", labels);
				console.log("Processed values:", values);
				
				// Donut Chart for Case Types
				if (document.getElementById('donutChart')) {
					const donutChartCtx = document.getElementById('donutChart').getContext('2d');
					new Chart(donutChartCtx, {
						type: 'doughnut',
						data: {
							labels: labels.length > 0 ? labels : ['No Data'],
							datasets: [{
								data: values.length > 0 ? values : [1],
								backgroundColor: [
									'#4361ee', '#4cc9f0', '#4ade80', '#f59e0b', 
									'#f43f5e', '#8b5cf6', '#ec4899', '#0ea5e9'
								],
								borderWidth: 0,
								hoverOffset: 15
							}]
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							cutout: '70%',
							plugins: {
								legend: {
									position: 'bottom',
									labels: {
										padding: 20,
										usePointStyle: true,
										pointStyle: 'circle'
									}
								},
								tooltip: {
									backgroundColor: 'rgba(30, 41, 59, 0.8)',
									padding: 12,
									titleFont: {
										size: 14,
										weight: 'bold'
									},
									bodyFont: {
										size: 13
									},
									cornerRadius: 8,
									displayColors: false,
									callbacks: {
										label: function(context) {
											if (labels[0] === 'No Data') return 'No data available';
											const total = context.dataset.data.reduce((a, b) => a + b, 0);
											const value = context.raw;
											const percentage = ((value / total) * 100).toFixed(1);
											return `${value} perkara (${percentage}%)`;
										}
									}
								}
							},
							animation: {
								animateScale: true,
								animateRotate: true
							}
						}
					});
				} else {
					console.error("donutChart element not found");
				}

				// Mediasi Chart
				if (document.getElementById('mediasiChart')) {
					const mediasiChartCtx = document.getElementById('mediasiChart').getContext('2d');
					const mediasiData = <?php echo json_encode($mediasi_data); ?>;
					new Chart(mediasiChartCtx, {
						type: 'doughnut',
						data: {
							labels: [
								'Tidak Dapat Dilaksanakan', 
								'Tidak Berhasil', 
								'Berhasil Sebagian', 
								'Berhasil Dengan Pencabutan', 
								'Berhasil Dengan Akta Perdamaian'
							],
							datasets: [{
								data: [
									parseInt(mediasiData.D || 0),
									parseInt(mediasiData.T || 0),
									parseInt(mediasiData.S || 0),
									parseInt(mediasiData.Y2 || 0),
									parseInt(mediasiData.Y1 || 0)
								],
								backgroundColor: [
									'#f43f5e', '#f59e0b', '#0ea5e9', '#4ade80', '#4361ee'
								],
								borderWidth: 0,
								hoverOffset: 15
							}]
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							cutout: '65%',
							plugins: {
								legend: {
									position: 'bottom',
									labels: {
										padding: 20,
										usePointStyle: true,
										pointStyle: 'circle'
									}
								},
								tooltip: {
									backgroundColor: 'rgba(30, 41, 59, 0.8)',
									padding: 12,
									titleFont: {
										size: 14,
										weight: 'bold'
									},
									bodyFont: {
										size: 13
									},
									cornerRadius: 8,
									displayColors: false
								}
							},
							animation: {
								animateScale: true,
								animateRotate: true
							}
						}
					});
				} else {
					console.error("mediasiChart element not found");
				}

				// E-filing Chart
				if (document.getElementById('efilingChart')) {
					const efilingChartCtx = document.getElementById('efilingChart').getContext('2d');
					const totalPerkaraData = <?php echo json_encode($total_perkara_data); ?>;
					new Chart(efilingChartCtx, {
						type: 'doughnut',
						data: {
							labels: ['E-Court', 'Non E-Court'],
							datasets: [{
								data: [
									parseInt(totalPerkaraData.total_perkara_ecourt || 0),
									parseInt(totalPerkaraData.total_perkara_non_ecourt || 0)
								],
								backgroundColor: [
									'#4ade80', '#f43f5e'
								],
								borderWidth: 0,
								hoverOffset: 15
							}]
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							cutout: '65%',
							plugins: {
								legend: {
									position: 'bottom',
									labels: {
										padding: 20,
										usePointStyle: true,
										pointStyle: 'circle'
									}
								},
								tooltip: {
									backgroundColor: 'rgba(30, 41, 59, 0.8)',
									padding: 12,
									titleFont: {
										size: 14,
										weight: 'bold'
									},
									bodyFont: {
										size: 13
									},
									cornerRadius: 8,
									displayColors: false,
									callbacks: {
										label: function(context) {
											const total = context.dataset.data.reduce((a, b) => a + b, 0);
											const value = context.raw;
											const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : '0.0';
											return `${value} perkara (${percentage}%)`;
										}
									}
								}
							},
							animation: {
								animateScale: true,
								animateRotate: true
							}
						}
					});
				} else {
					console.error("efilingChart element not found");
				}
			
			} catch (error) {
				console.error("Error initializing charts:", error);
			}
		});
	</script>
</body>

</html>