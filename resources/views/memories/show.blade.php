<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $memory->title }} - Dear Diary</title>
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
        .btn-nav { background: #7c3aed; color: white !important; border: none; padding: 10px 22px; border-radius: 50px; font-size: 13px; font-weight: 600; text-decoration: none; }
        .btn-nav:hover { background: #6d28d9; }
        .section { padding: 48px 64px; }
        .back-link { display: inline-flex; align-items: center; gap: 8px; color: #6b7280; font-size: 14px; text-decoration: none; margin-bottom: 28px; }
        .back-link:hover { color: #7c3aed; }
        .memory-wrapper { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start; }
        .photo-side { position: relative; }
        .memory-photo { width: 100%; border-radius: 20px; object-fit: cover; max-height: 480px; box-shadow: 0 20px 60px rgba(124,58,237,0.15); }
        .no-photo { width: 100%; height: 380px; background: linear-gradient(135deg, #f5f3ff, #fdf4ff); border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 96px; }
        .polaroid-tape { width: 56px; height: 18px; background: rgba(200,180,255,0.5); border-radius: 3px; margin: 0 auto -10px; position: relative; z-index: 2; }
        .favorite-ribbon { position: absolute; top: 16px; right: 16px; background: #fef9c3; color: #854d0e; padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 600; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .content-side { }
        .memory-eyebrow { font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 12px; }
        .memory-title { font-size: 32px; font-weight: 700; color: #1a1a2e; line-height: 1.2; margin-bottom: 16px; }
        .memory-meta { display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-bottom: 28px; }
        .meta-date { display: inline-flex; align-items: center; gap: 6px; background: #f5f3ff; color: #7c3aed; padding: 6px 14px; border-radius: 50px; font-size: 13px; font-weight: 500; }
        .mood-badge { display: inline-block; font-size: 13px; padding: 6px 16px; border-radius: 50px; font-weight: 500; }
        .mood-Happy { background: #fef9c3; color: #854d0e; }
        .mood-Sad { background: #dbeafe; color: #1e40af; }
        .mood-Excited { background: #fce7f3; color: #9d174d; }
        .mood-Grateful { background: #dcfce7; color: #166534; }
        .mood-Nostalgic { background: #ede9fe; color: #5b21b6; }
        .divider { border: none; border-top: 1px solid #f5f3ff; margin: 24px 0; }
        .description-label { font-size: 11px; font-weight: 700; color: #9ca3af; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 12px; }
        .memory-description { font-size: 15px; color: #374151; line-height: 1.9; border-left: 3px solid #e9d5ff; padding-left: 20px; font-style: italic; }
        .action-bar { display: flex; gap: 10px; margin-top: 32px; flex-wrap: wrap; }
        .btn-edit { background: #fef9c3; color: #854d0e; border: none; padding: 11px 24px; border-radius: 50px; font-size: 14px; font-weight: 600; text-decoration: none; display: inline-block; }
        .btn-edit:hover { background: #fef08a; color: #713f12; }
        .btn-delete { background: #fee2e2; color: #991b1b; border: none; padding: 11px 24px; border-radius: 50px; font-size: 14px; font-weight: 600; cursor: pointer; }
        .btn-delete:hover { background: #fecaca; color: #7f1d1d; }
        .btn-back { background: white; color: #6b7280; border: 1.5px solid #e5e7eb; padding: 11px 24px; border-radius: 50px; font-size: 14px; font-weight: 500; text-decoration: none; display: inline-block; }
        .btn-back:hover { background: #f9fafb; color: #374151; }
        .created-at { font-size: 12px; color: #9ca3af; margin-top: 24px; }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ route('home') }}">dear diary.</a>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('memories.index') }}">Memories</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>
        <a href="{{ route('memories.create') }}" class="btn-nav">+ add memory</a>
    </nav>

    <div class="section">
        <a href="{{ route('memories.index') }}" class="back-link">← back to memories</a>

        <div class="memory-wrapper">
            <div class="photo-side">
                <div class="polaroid-tape"></div>
                @if($memory->photo)
                    <img src="{{ asset('photos/' . $memory->photo) }}" class="memory-photo">
                @else
                    <div class="no-photo">📷</div>
                @endif
                @if($memory->is_favorite)
                    <div class="favorite-ribbon">⭐ Favorite Memory</div>
                @endif
            </div>

            <div class="content-side">
                <div class="memory-eyebrow">memory</div>
                <div class="memory-title">{{ $memory->title }}</div>

                <div class="memory-meta">
                    <span class="meta-date">📅 {{ $memory->date->format('F d, Y') }}</span>
                    <span class="mood-badge mood-{{ $memory->mood }}">{{ $memory->mood }}</span>
                </div>

                <hr class="divider">

                <div class="description-label">what happened</div>
                <div class="memory-description">{{ $memory->description }}</div>

                <div class="action-bar">
                    <a href="{{ route('memories.edit', $memory->id) }}" class="btn-edit">✏️ edit</a>
                    <form action="{{ route('memories.destroy', $memory->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this memory?')">🗑️ delete</button>
                    </form>
                    <a href="{{ route('memories.index') }}" class="btn-back">⬅️ back</a>
                </div>

                <div class="created-at">Added on {{ $memory->created_at->format('F d, Y \a\t h:i A') }}</div>
            </div>
        </div>
    </div>
</body>
</html>