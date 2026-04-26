<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Dear Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { background: #fafafa; }
        .navbar { background: white; border-bottom: 1px solid #f0f0f0; padding: 14px 40px; display: flex; justify-content: space-between; align-items: center; }
        .navbar-brand { font-weight: 700; color: #7c3aed !important; font-size: 20px; letter-spacing: 1px; text-decoration: none; }
        .nav-links { display: flex; gap: 32px; align-items: center; }
        .nav-links a { color: #6b7280; font-size: 14px; text-decoration: none; }
        .nav-links a:hover { color: #7c3aed; }
        .nav-links a.active { color: #7c3aed; font-weight: 600; border-bottom: 2px solid #7c3aed; padding-bottom: 2px; }
        .btn-nav { background: #7c3aed; color: white !important; border: none; padding: 10px 22px; border-radius: 50px; font-size: 13px; font-weight: 600; text-decoration: none; }
        .btn-nav:hover { background: #6d28d9; }
        .hero { background: linear-gradient(135deg, #f5f3ff 0%, #fdf4ff 100%); padding: 72px 64px; text-align: center; }
        .hero-eyebrow { font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 16px; }
        .hero h1 { font-size: 40px; font-weight: 700; color: #1a1a2e; margin-bottom: 16px; line-height: 1.2; }
        .hero h1 span { color: #7c3aed; }
        .hero p { font-size: 15px; color: #6b7280; max-width: 520px; margin: 0 auto; line-height: 1.8; }
        .section { padding: 64px; }
        .section-eyebrow { font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 8px; text-align: center; }
        .section-title { font-size: 28px; font-weight: 700; color: #1a1a2e; margin-bottom: 48px; text-align: center; }
        .member-card { background: white; border: 1px solid #f0f0f0; border-radius: 24px; padding: 36px 28px; text-align: center; box-shadow: 0 4px 24px rgba(124,58,237,0.06); transition: all 0.3s; }
        .member-card:hover { transform: translateY(-6px); box-shadow: 0 16px 48px rgba(124,58,237,0.12); }
        .avatar-wrapper { position: relative; width: 90px; margin: 0 auto 20px; }
        .avatar { width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ede9fe, #f5f3ff); border: 3px solid #e9d5ff; display: flex; align-items: center; justify-content: center; font-size: 28px; font-weight: 700; color: #7c3aed; }
        .avatar-dot { position: absolute; bottom: 4px; right: 4px; width: 16px; height: 16px; background: #22c55e; border-radius: 50%; border: 2px solid white; }
        .member-name { font-size: 17px; font-weight: 700; color: #1a1a2e; margin-bottom: 8px; }
        .role-badge { display: inline-block; font-size: 12px; padding: 5px 16px; border-radius: 50px; background: #7c3aed; color: white; margin-bottom: 16px; font-weight: 500; }
        .member-desc { font-size: 13px; color: #9ca3af; line-height: 1.7; margin-bottom: 20px; }
        .member-divider { border: none; border-top: 1px solid #f5f3ff; margin: 16px 0; }
        .member-tag { display: inline-block; background: #f5f3ff; color: #7c3aed; font-size: 11px; padding: 4px 12px; border-radius: 50px; margin: 3px; font-weight: 500; border: 1px solid #e9d5ff; }
        .project-section { background: white; padding: 64px; border-top: 1px solid #f0f0f0; }
        .project-card { background: #faf5ff; border: 1px solid #e9d5ff; border-radius: 24px; padding: 40px; }
        .project-header { display: flex; align-items: center; gap: 20px; margin-bottom: 24px; }
        .project-icon { width: 64px; height: 64px; background: #7c3aed; border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 28px; }
        .project-title { font-size: 22px; font-weight: 700; color: #1a1a2e; margin-bottom: 4px; }
        .project-subtitle { font-size: 13px; color: #9ca3af; }
        .project-desc { font-size: 14px; color: #374151; line-height: 1.9; margin-bottom: 24px; }
        .tech-grid { display: flex; flex-wrap: wrap; gap: 8px; }
        .tech-badge { display: inline-block; background: white; color: #7c3aed; font-size: 12px; padding: 6px 16px; border-radius: 50px; font-weight: 600; border: 1.5px solid #e9d5ff; }
        .footer-cta { background: linear-gradient(135deg, #7c3aed, #a855f7); padding: 48px 64px; text-align: center; color: white; }
        .footer-cta h2 { font-size: 26px; font-weight: 700; margin-bottom: 10px; }
        .footer-cta p { font-size: 14px; opacity: 0.85; margin-bottom: 24px; }
        .btn-white { background: white; color: #7c3aed; border: none; padding: 13px 32px; border-radius: 50px; font-size: 14px; font-weight: 600; text-decoration: none; display: inline-block; }
        .btn-white:hover { background: #f5f3ff; color: #7c3aed; }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">dear diary.</a>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('memories.index') }}">Memories</a>
            <a href="{{ route('about') }}" class="active">About Us</a>
        </div>
        <a href="{{ route('memories.create') }}" class="btn-nav">+ add memory</a>
    </nav>

    <div class="hero">
        <div class="hero-eyebrow">our team</div>
        <h1>meet the people behind<br><span>dear diary.</span> 👋</h1>
        <p>A passionate team of BSIT students who built this app with love, creativity, and lots of coffee ☕</p>
    </div>

    <div class="section" style="background: #fafafa;">
        <div class="section-eyebrow">the developers</div>
        <div class="section-title">our amazing team</div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="member-card">
                    <div class="avatar-wrapper">
                        <div class="avatar">JT</div>
                        <div class="avatar-dot"></div>
                    </div>
                    <div class="member-name">Jonel Roy Talapiero</div>
                    <div class="role-badge">Lead Developer</div>
                    <div class="member-desc">Responsible for the overall development and architecture of the Dear Diary application. Leads all coding and implementation of features.</div>
                    <hr class="member-divider">
                    <div>
                        <span class="member-tag">Laravel</span>
                        <span class="member-tag">PHP</span>
                        <span class="member-tag">Backend</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="member-card">
                    <div class="avatar-wrapper">
                        <div class="avatar">RS</div>
                        <div class="avatar-dot"></div>
                    </div>
                    <div class="member-name">Rodylen Sumagaysay</div>
                    <div class="role-badge">UI/UX Designer</div>
                    <div class="member-desc">Responsible for the visual design and user experience of the application. Ensures the app is beautiful, intuitive, and easy to use.</div>
                    <hr class="member-divider">
                    <div>
                        <span class="member-tag">UI Design</span>
                        <span class="member-tag">CSS</span>
                        <span class="member-tag">Bootstrap</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="member-card">
                    <div class="avatar-wrapper">
                        <div class="avatar">JE</div>
                        <div class="avatar-dot"></div>
                    </div>
                    <div class="member-name">Jared Entierro</div>
                    <div class="role-badge">Database Administrator</div>
                    <div class="member-desc">Responsible for the database design, management, and optimization. Ensures data is stored securely and retrieved efficiently.</div>
                    <hr class="member-divider">
                    <div>
                        <span class="member-tag">MySQL</span>
                        <span class="member-tag">Migrations</span>
                        <span class="member-tag">Eloquent</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project-section">
        <div class="section-eyebrow">the project</div>
        <div class="section-title">about dear diary</div>
        <div class="project-card">
            <div class="project-header">
                <div class="project-icon">📔</div>
                <div>
                    <div class="project-title">Dear Diary — Memory Journal App</div>
                    <div class="project-subtitle">A Laravel CRUD Web Application</div>
                </div>
            </div>
            <div class="project-desc">
                Dear Diary is a personal memory journal web application built using the Laravel Framework as part of a BSIT course project. It allows users to capture and preserve their most precious memories complete with photos, descriptions, mood tags, and dates. The application demonstrates full CRUD functionality — users can Create, Read, Update, and Delete memory entries within a MySQL database, following the MVC (Model-View-Controller) architecture pattern. The app features a modern polaroid-style design, photo uploads, mood tracking, and a favorites system.
            </div>
            <div class="tech-grid">
                <span class="tech-badge">⚡ Laravel 12</span>
                <span class="tech-badge">🐘 PHP 8.2</span>
                <span class="tech-badge">🗄️ MySQL</span>
                <span class="tech-badge">🎨 Bootstrap 5</span>
                <span class="tech-badge">🖼️ Blade Templates</span>
                <span class="tech-badge">🏗️ MVC Architecture</span>
                <span class="tech-badge">📸 Photo Uploads</span>
                <span class="tech-badge">😊 Mood Tracking</span>
            </div>
        </div>
    </div>

    <div class="footer-cta">
        <h2>start capturing your memories today 📸</h2>
        <p>Every moment is worth remembering. Open your diary and begin your story.</p>
        <a href="{{ route('memories.create') }}" class="btn-white">add a memory ✨</a>
    </div>

</body>
</html>