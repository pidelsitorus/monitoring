<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="title">Register</h1>
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf
            <div class="input-group">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
        
            <!-- Select role: Pasien or Dokter -->
            <div class="input-group">
                <select name="role" id="role" required>
                    <option value="" disabled selected>Choose role</option>
                    <option value="dokter">Dokter</option>
                    <option value="pasien">Pasien</option>
                </select>
            </div>
        
            <!-- Additional Fields for Pasien -->
            <div class="input-group" id="birthdate-group" style="display: none;">
                <input type="date" name="birth_date" placeholder="Birth Date">
            </div>
            <div class="input-group" id="gender-group" style="display: none;">
                <select name="jenis_kelamin">
                    <option value="" disabled selected>Choose Gender</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        
            <button type="submit" class="submit-btn">Register</button>
        </form>
        
        <div class="login-link">
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const roleSelect = document.getElementById('role');
                const birthDateGroup = document.getElementById('birthdate-group');
                const genderGroup = document.getElementById('gender-group');
                
                // Initially hide additional fields
                birthDateGroup.style.display = 'none';
                genderGroup.style.display = 'none';
        
                // Show/Hide fields based on selected role
                roleSelect.addEventListener('change', function() {
                    if (this.value === 'dokter') {
                        birthDateGroup.style.display = 'none';
                        genderGroup.style.display = 'none';
                    } else if (this.value === 'pasien') {
                        birthDateGroup.style.display = 'block';
                        genderGroup.style.display = 'block';
                    }
                });
            });
        </script>
</body>
</html>
