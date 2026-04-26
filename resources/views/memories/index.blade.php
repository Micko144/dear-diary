<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Memories - Dear Diary</title>
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
        .page-header { background: linear-gradient(135deg, #f5f3ff 0%, #fdf4ff 100%); padding: 48px 64px; display: flex; justify-content: space-between; align-items: center; }
        .page-header h1 { font-size: 32px; font-weight: 700; color: #1a1a2e; margin-bottom: 6px; }
        .page-header p { font-size: 14px; color: #9ca3af; margin: 0; }
        .btn-primary-purple { background: #7c3aed; color: white; border: none; padding: 13px 28px; border-radius: 50px; font-size: 14px; font-weight: 600; text-decoration: none; display: inline-block; }
        .btn-primary-purple:hover { background: #6d28d9; color: white; }
        .section { padding: 40px 64px; }
        .filter-bar { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 32px; }
        .filter-btn { background: white; border: 1.5px solid #e5e7eb; padding: 8px 18px; border-radius: 50px; font-size: 12px; cursor: pointer; color: #6b7280; font-weight: 500; transition: all 0.2s; }
        .filter-btn:hover { border-color: #7c3aed; color: #7c3aed; }
        .filter-btn.active { background: #7c3aed; color: white; border-color: #7c3aed; }
        .polaroid { background: white; padding: 10px 10px 18px; box-shadow: 0 8px 32px rgba(124,58,237,0.08), 0 2px 8px rgba(0,0,0,0.05); position: relative; border-radius: 2px; transition: all 0.3s ease; }
        .polaroid:nth-child(odd) { transform: rotate(-1.5deg); }
        .polaroid:nth-child(even) { transform: rotate(1deg); }
        .polaroid:hover { transform: rotate(0deg) scale(1.04) !important; z-index: 10; box-shadow: 0 20px 48px rgba(124,58,237,0.15); }
        .tape { width: 44px; height: 14px; background: rgba(200,180,255,0.45); border-radius: 2px; margin: -18px auto 10px; }
        .polaroid-img { width: 100%; height: 150px; object-fit: cover; border-radius: 1px; margin-bottom: 12px; background: #f3f0ff; display: flex; align-items: center; justify-content: center; font-size: 48px; }
        .polaroid-title { font-size: 13px; font-weight: 600; color: #1a1a2e; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .polaroid-date { font-size: 11px; color: #9ca3af; margin-bottom: 8px; }
        .mood-badge { display: inline-block; font-size: 10px; padding: 3px 10px; border-radius: 50px; font-weight: 500; }
        .mood-Happy { background: #fef9c3; color: #854d0e; }
        .mood-Sad { background: #dbeafe; color: #1e40af; }
        .mood-Excited { background: #fce7f3; color: #9d174d; }
        .mood-Grateful { background: #dcfce7; color: #166534; }
        .mood-Nostalgic { background: #ede9fe; color: #5b21b6; }
        .star { color: #f59e0b; font-size: 15px; }
        .card-actions { display: flex; gap: 6px; margin-top: 10px; padding-top: 10px; border-top: 1px solid #f5f3ff; }
        .btn-view { background: #7c3aed; color: white; border: none; padding: 5px 12px; border-radius: 50px; font-size: 11px; text-decoration: none; font-weight: 500; }
        .btn-edit { background: #fef9c3; color: #854d0e; border: none; padding: 5px 12px; border-radius: 50px; font-size: 11px; text-decoration: none; font-weight: 500; }
        .btn-del { background: #fee2e2; color: #991b1b; border: none; padding: 5px 12px; border-radius: 50px; font-size: 11px; cursor: pointer; font-weight: 500; }
        .empty-state { text-align: center; padding: 80px; color: #9ca3af; }
        .alert-success { background: #f0fdf4; border: 1px solid #bbf7d0; color: #166534; border-radius: 50px; text-align: center; padding: 12px 24px; font-size: 14px; }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">dear diary.</a>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('memories.index') }}" class="active">Memories</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>
        <a href="{{ route('memories.create') }}" class="btn-nav">+ add memory</a>
    </nav>

    <div class="page-header">
        <div>
            <h1>📖 my memories</h1>
            <p>{{ $memories->count() }} memories captured so far</p>
        </div>
        <a href="{{ route('memories.create') }}" class="btn-primary-purple">+ add memory</a>
    </div>

    <div class="section">
        @if(session('success'))
            <div class="alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="filter-bar">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">😊 Happy</button>
            <button class="filter-btn">😢 Sad</button>
            <button class="filter-btn">🤩 Excited</button>
            <button class="filter-btn">🙏 Grateful</button>
            <button class="filter-btn">🥹 Nostalgic</button>
            <button class="filter-btn">⭐ Favorites</button>
        </div>

        @if($memories->isEmpty())
            <div class="empty-state">
                <p style="font-size:64px; margin-bottom:16px;">📷</p>
                <p style="font-size:18px; font-weight:600; color:#374151; margin-bottom:8px;">no memories yet</p>
                <p style="margin-bottom:28px;">Start capturing your special moments!</p>
                <a href="{{ route('memories.create') }}" class="btn-primary-purple">add your first memory ✨</a>
            </div>
        @else
            <div class="row g-4">
                @foreach($memories as $memory)
                <div class="col-md-3">
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
                        <div class="card-actions">
                            <a href="{{ route('memories.show', $memory->id) }}" class="btn-view">View</a>
                            <a href="{{ route('memories.edit', $memory->id) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('memories.destroy', $memory->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-del" onclick="return confirm('Delete this memory?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>