<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Memory - Dear Diary</title>
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
        .page-header { background: linear-gradient(135deg, #f5f3ff 0%, #fdf4ff 100%); padding: 40px 64px; }
        .page-header h1 { font-size: 30px; font-weight: 700; color: #1a1a2e; margin-bottom: 6px; }
        .page-header p { font-size: 14px; color: #9ca3af; margin: 0; }
        .section { padding: 40px 64px; }
        .form-card { background: white; border-radius: 24px; padding: 40px; border: 1px solid #f0f0f0; box-shadow: 0 4px 24px rgba(124,58,237,0.06); }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .form-group { margin-bottom: 24px; }
        .form-label { font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block; }
        .form-control { width: 100%; background: #f9fafb; border: 1.5px solid #e5e7eb; border-radius: 12px; padding: 12px 16px; font-size: 14px; color: #374151; font-family: 'Poppins', sans-serif; transition: border-color 0.2s; }
        .form-control:focus { border-color: #7c3aed; outline: none; background: white; box-shadow: 0 0 0 4px rgba(124,58,237,0.08); }
        .mood-options { display: flex; gap: 10px; flex-wrap: wrap; }
        .mood-option input[type="radio"] { display: none; }
        .mood-option label { padding: 9px 18px; border-radius: 50px; border: 1.5px solid #e5e7eb; font-size: 13px; cursor: pointer; transition: all 0.2s; color: #6b7280; font-weight: 500; }
        .mood-option label:hover { border-color: #7c3aed; color: #7c3aed; }
        .mood-option input[type="radio"]:checked + label { background: #7c3aed; color: white; border-color: #7c3aed; }
        .current-photo-box { background: #f9fafb; border: 1.5px solid #e5e7eb; border-radius: 12px; padding: 16px; margin-bottom: 12px; display: flex; align-items: center; gap: 16px; }
        .current-photo-box img { width: 80px; height: 80px; object-fit: cover; border-radius: 8px; }
        .current-photo-box p { font-size: 13px; color: #6b7280; margin: 0; }
        .current-photo-box small { font-size: 11px; color: #9ca3af; }
        .photo-upload-area { border: 2px dashed #e9d5ff; border-radius: 16px; padding: 32px 24px; text-align: center; cursor: pointer; transition: all 0.2s; background: #faf5ff; }
        .photo-upload-area:hover { border-color: #7c3aed; background: #f5f3ff; }
        .photo-upload-area .upload-icon { font-size: 32px; margin-bottom: 10px; }
        .photo-upload-area p { font-size: 13px; color: #6b7280; margin: 0; }
        .photo-upload-area small { font-size: 11px; color: #9ca3af; }
        .fav-toggle { display: flex; align-items: center; gap: 12px; background: #faf5ff; border: 1.5px solid #e9d5ff; border-radius: 12px; padding: 14px 18px; cursor: pointer; }
        .fav-toggle input { width: 18px; height: 18px; accent-color: #f59e0b; cursor: pointer; }
        .fav-toggle label { font-size: 14px; color: #374151; font-weight: 500; cursor: pointer; margin: 0; }
        .form-actions { display: flex; gap: 12px; margin-top: 32px; }
        .btn-primary-purple { background: #7c3aed; color: white; border: none; padding: 13px 32px; border-radius: 50px; font-size: 14px; font-weight: 600; cursor: pointer; }
        .btn-primary-purple:hover { background: #6d28d9; }
        .btn-outline { background: white; color: #6b7280; border: 1.5px solid #e5e7eb; padding: 13px 32px; border-radius: 50px; font-size: 14px; font-weight: 500; text-decoration: none; display: inline-block; }
        .btn-outline:hover { background: #f9fafb; color: #374151; }
        .alert-danger { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; border-radius: 12px; padding: 14px 20px; font-size: 14px; margin-bottom: 24px; }
        .divider { border: none; border-top: 1px solid #f5f3ff; margin: 8px 0 24px; }
        .section-label { font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 16px; }
        .file-name-display { font-size: 13px; color: #7c3aed; margin-top: 8px; font-weight: 500; }
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
        <a href="{{ route('memories.index') }}" class="btn-nav">← back</a>
    </nav>

    <div class="page-header">
        <h1>✏️ edit memory</h1>
        <p>Update the details of this memory</p>
    </div>

    <div class="section">
        <div class="form-card">

            @if($errors->any())
                <div class="alert-danger">
                    <ul class="mb-0 ps-3">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('memories.update', $memory->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="section-label">basic info</div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">📝 Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $memory->title }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">📅 Date</label>
                        <input type="date" name="date" class="form-control" value="{{ $memory->date->format('Y-m-d') }}" required>
                    </div>
                </div>

                <hr class="divider">
                <div class="section-label">your mood</div>
                <div class="form-group">
                    <div class="mood-options">
                        @foreach(['Happy' => '😊', 'Sad' => '😢', 'Excited' => '🤩', 'Grateful' => '🙏', 'Nostalgic' => '🥹'] as $mood => $emoji)
                        <div class="mood-option">
                            <input type="radio" name="mood" id="mood_{{ $mood }}" value="{{ $mood }}" {{ $memory->mood == $mood ? 'checked' : '' }} required>
                            <label for="mood_{{ $mood }}">{{ $emoji }} {{ $mood }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <hr class="divider">
                <div class="section-label">your story</div>
                <div class="form-group">
                    <label class="form-label">💭 Description</label>
                    <textarea name="description" class="form-control" rows="5" required>{{ $memory->description }}</textarea>
                </div>

                <hr class="divider">
                <div class="section-label">photo</div>
                <div class="form-group">
                    @if($memory->photo)
                        <div class="current-photo-box">
                            <img src="{{ asset('photos/' . $memory->photo) }}" alt="Current photo">
                            <div>
                                <p>Current photo</p>
                                <small>Upload a new one below to replace it</small>
                            </div>
                        </div>
                    @endif
                    <div class="photo-upload-area" onclick="document.getElementById('photo').click()">
                        <div class="upload-icon">📷</div>
                        <p>Click to upload a new photo</p>
                        <small>JPG, PNG, GIF up to 2MB</small>
                        <input type="file" id="photo" name="photo" accept="image/*" style="display:none;" onchange="showFileName(this)">
                    </div>
                    <div id="file-name-display" class="file-name-display"></div>
                </div>

                <hr class="divider">
                <div class="fav-toggle">
                    <input type="checkbox" name="is_favorite" id="is_favorite" value="1" {{ $memory->is_favorite ? 'checked' : '' }}>
                    <label for="is_favorite">⭐ Mark this as a favorite memory</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary-purple">🌸 update memory</button>
                    <a href="{{ route('memories.index') }}" class="btn-outline">cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showFileName(input) {
            if (input.files && input.files[0]) {
                document.getElementById('file-name-display').textContent = '📎 ' + input.files[0].name;
            }
        }
    </script>
</body>
</html>