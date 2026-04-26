<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dear Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { background: #fafafa; margin: 0; }
        .navbar { background: white; border-bottom: 1px solid #f0f0f0; padding: 14px 40px; display: flex; justify-content: space-between; align-items: center; }
        .navbar-brand { font-weight: 700; color: #7c3aed !important; font-size: 20px; letter-spacing: 1px; text-decoration: none; }
        .nav-links { display: flex; gap: 32px; align-items: center; }
        .nav-links a { color: #6b7280; font-size: 14px; text-decoration: none; }
        .nav-links a:hover { color: #7c3aed; }
        .nav-links a.active { color: #7c3aed; font-weight: 600; border-bottom: 2px solid #7c3aed; padding-bottom: 2px; }
        .nav-right { display: flex; gap: 12px; align-items: center; }
        .btn-nav { background: #7c3aed; color: white; border: none; padding: 10px 22px; border-radius: 50px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; }
        .btn-nav:hover { background: #6d28d9; color: white; }
        .hero { background: linear-gradient(135deg, #f5f3ff 0%, #fdf4ff 60%, #fff 100%); padding: 64px 64px; display: flex; align-items: center; justify-content: space-between; min-height: 420px; position: relative; overflow: hidden; }
        .hero-left { max-width: 480px; z-index: 2; }
        .hero-eyebrow { display: inline-flex; align-items: center; gap: 8px; background: white; border: 1px solid #e9d5ff; padding: 6px 16px; border-radius: 50px; font-size: 12px; color: #7c3aed; font-weight: 500; margin-bottom: 24px; }
        .hero h1 { font-size: 44px; font-weight: 700; color: #1a1a2e; line-height: 1.15; margin-bottom: 16px; }
        .hero h1 span { color: #7c3aed; }
        .hero p { font-size: 15px; color: #6b7280; line-height: 1.8; margin-bottom: 32px; }
        .hero-btns { display: flex; gap: 16px; align-items: center; margin-bottom: 40px; }
        .btn-primary-purple { background: #7c3aed; color: white; border: none; padding: 13px 28px; border-radius: 50px; font-size: 14px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
        .btn-primary-purple:hover { background: #6d28d9; color: white; }
        .btn-ghost { background: transparent; color: #6b7280; border: none; padding: 13px 20px; border-radius: 50px; font-size: 14px; font-weight: 500; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
        .btn-ghost:hover { color: #7c3aed; }
        .play-icon { width: 32px; height: 32px; background: white; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-size: 12px; }
        .hero-features { display: flex; gap: 28px; }
        .hero-feature { display: flex; align-items: flex-start; gap: 10px; }
        .feature-icon { width: 36px; height: 36px; background: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; box-shadow: 0 2px 8px rgba(124,58,237,0.1); flex-shrink: 0; }
        .feature-title { font-size: 12px; font-weight: 600; color: #1a1a2e; margin-bottom: 2px; }
        .feature-desc { font-size: 11px; color: #9ca3af; }
        .hero-right { position: relative; z-index: 2; }
        .diary-illustration { width: 320px; height: 300px; background: radial-gradient(circle at center, #ede9fe 0%, #f5f3ff 60%, transparent 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; position: relative; }
        .diary-book { font-size: 140px; filter: drop-shadow(0 20px 40px rgba(124,58,237,0.2)); }
        .float-badge { position: absolute; background: white; border-radius: 12px; padding: 8px 14px; box-shadow: 0 4px 16px rgba(0,0,0,0.08); font-size: 11px; font-weight: 600; }
        .badge-1 { top: 20px; left: -20px; color: #7c3aed; }
        .badge-2 { bottom: 40px; right: -10px; color: #059669; }
        .badge-3 { top: 50%; left: -30px; color: #f59e0b; }
        .stats-bar { background: white; border-top: 1px solid #f0f0f0; border-bottom: 1px solid #f0f0f0; padding: 20px 64px; display: flex; gap: 48px; align-items: center; justify-content: center; }
        .stat-item { text-align: center; }
        .stat-num { font-size: 28px; font-weight: 700; color: #7c3aed; line-height: 1; }
        .stat-label { font-size: 11px; color: #9ca3af; margin-top: 4px; }
        .stat-divider { width: 1px; height: 40px; background: #f0f0f0; }
        .section { padding: 56px 64px; }
        .section-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; }
        .section-title { font-size: 22px; font-weight: 700; color: #1a1a2e; margin: 0; }
        .section-sub { font-size: 13px; color: #9ca3af; margin: 4px 0 0; }
        .see-all-btn { background: #f5f3ff; color: #7c3aed; border: none; padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 500; text-decoration: none; }
        .see-all-btn:hover { background: #ede9fe; color: #7c3aed; }
        .polaroid { background: white; padding: 10px 10px 18px; box-shadow: 0 8px 32px rgba(124,58,237,0.08), 0 2px 8px rgba(0,0,0,0.05); position: relative; border-radius: 2px; transition: all 0.3s ease; cursor: pointer; }
        .polaroid:nth-child(odd) { transform: rotate(-2deg); }
        .polaroid:nth-child(even) { transform: rotate(1.5deg); }
        .polaroid:hover { transform: rotate(0deg) scale(1.05) !important; z-index: 10; box-shadow: 0 20px 48px rgba(124,58,237,0.15); }
        .tape { width: 44px; height: 14px; background: rgba(200,180,255,0.45); border-radius: 2px; margin: -18px auto 10px; }
        .polaroid-img { width: 100%; height: 160px; object-fit: cover; border-radius: 1px; margin-bottom: 12px; background: #f3f0ff; display: flex; align-items: center; justify-content: center; font-size: 52px; }
        .polaroid-title { font-size: 13px; font-weight: 600; color: #1a1a2e; margin-bottom: 4px; }
        .polaroid-date { font-size: 11px; color: #9ca3af; margin-bottom: 8px; }
        .mood-badge { display: inline-block; font-size: 10px; padding: 3px 10px; border-radius: 50px; font-weight: 500; }
        .mood-Happy { background: #fef9c3; color: #854d0e; }
        .mood-Sad { background: #dbeafe; color: #1e40af; }
        .mood-Excited { background: #fce7f3; color: #9d174d; }
        .mood-Grateful { background: #dcfce7; color: #166534; }
        .mood-Nostalgic { background: #ede9fe; color: #5b21b6; }
        .star { color: #f59e0b; font-size: 15px; }
        .empty-state { text-align: center; padding: 80px; color: #9ca3af; }
        .footer-cta { background: linear-gradient(135deg, #7c3aed, #a855f7); padding: 48px 64px; text-align: center; color: white; }
        .footer-cta h2 { font-size: 28px; font-weight: 700; margin-bottom: 12px; }
        .footer-cta p { font-size: 14px; opacity: 0.85; margin-bottom: 24px; }
        .btn-white { background: white; color: #7c3aed; border: none; padding: 13px 32px; border-radius: 50px; font-size: 14px; font-weight: 600; text-decoration: none; }
        .btn-white:hover { background: #f5f3ff; color: #7c3aed; }
    </style>
</head>
<body>

    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">dear diary.</a>
        <div class="nav-links">
            <a href="{{ route('home') }}" class="active">Home</a>
            <a href="{{ route('memories.index') }}">Memories</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>
        <div class="nav-right">
            <a href="{{ route('memories.create') }}" class="btn-nav">Open my diary 📖</a>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-left">
            <div class="hero-eyebrow">💜 Your story, your space</div>
            <h1>your memories,<br><span>beautifully kept.</span></h1>
            <p>A personal space to capture every moment<br>that matters to you.</p>
            <div class="hero-btns">
                <a href="{{ route('memories.index') }}" class="btn-primary-purple">Open my diary 📖</a>
                <a href="{{ route('memories.create') }}" class="btn-ghost">
                    <span class="play-icon">▶</span> Add a memory
                </a>
            </div>
        </div>
        <div class="hero-right">
            <div class="diary-illustration">
                <div class="diary-book">📔</div>
                <div class="float-badge badge-1">📸 New memory!</div>
                <div class="float-badge badge-2">✅ Saved safely</div>
                <div class="float-badge badge-3">⭐ Favorite</div>
            </div>
        </div>
    </div>

    <div class="stats-bar">
    <div class="text-center">
        <div class="stat-num">{{ \App\Models\Memory::count() }}</div>
        <div class="stat-label">total memories</div>
    </div>
    <div class="stat-divider"></div>
    <div class="text-center">
        <div class="stat-num">{{ \App\Models\Memory::where('is_favorite', true)->count() }}</div>
        <div class="stat-label">favorites</div>
    </div>
    <div class="stat-divider"></div>
    <div class="text-center">
        <div class="stat-num">{{ \App\Models\Memory::distinct('mood')->count('mood') }}</div>
        <div class="stat-label">moods captured</div>
    </div>
</div>

    <div class="section" style="background:#fafafa;">
        <div class="section-header">
            <div>
                <p class="section-title">📅 recent memories</p>
                <p class="section-sub">your latest captured moments</p>
            </div>
            <a href="{{ route('memories.index') }}" class="see-all-btn">View all memories →</a>
        </div>

        @if($recent->isEmpty())
            <div class="empty-state">
                <p style="font-size:64px; margin-bottom:16px;">📷</p>
                <p style="font-size:18px; font-weight:600; margin-bottom:8px; color:#374151;">no memories yet</p>
                <p style="margin-bottom:28px;">Start capturing your special moments!</p>
                <a href="{{ route('memories.create') }}" class="btn-primary-purple">add your first memory ✨</a>
            </div>
        @else
            <div class="row g-4">
                @foreach($recent as $memory)
                <div class="col-md-4">
                    <a href="{{ route('memories.show', $memory->id) }}" style="text-decoration:none;">
                        <div class="polaroid">
                            <div class="tape"></div>
                            @if($memory->photo)
                                <img src="{{ asset('photos/' . $memory->photo) }}" class="polaroid-img" style="display:block;">
                            @else
                                <div class="polaroid-img">📷</div>
                            @endif
                            <div class="polaroid-title">{{ $memory->title }}</div>
                            <div class="polaroid-date">{{ $memory->date->format('F d, Y') }}</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="mood-badge mood-{{ $memory->mood }}">{{ $memory->mood }}</span>
                                @if($memory->is_favorite) <span class="star">★</span> @endif
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('memories.index') }}" class="btn-primary-purple">view all memories →</a>
            </div>
        @endif
    </div>

    <div class="footer-cta">
        <h2>ready to capture a new memory? 📸</h2>
        <p>Every moment is worth remembering. Start writing your story today.</p>
        <a href="{{ route('memories.create') }}" class="btn-white">add a memory ✨</a>
    </div>

</body>
</html>