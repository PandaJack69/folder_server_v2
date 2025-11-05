<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloud Computing 2025 Registration</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f7f8fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding-right: 60px;
    }

    .form-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 380px;
      overflow: hidden;
    }

    /* .form-header {
      background-color: #276ef1;
      color: white;
      text-align: center;
      padding: 20px;
    } */
     .form-header {
      background: linear-gradient(135deg, #276ef1, #7b42f6);
      color: white;
      text-align: center;
      padding: 20px;
    }

    .form-header h2 {
      margin: 0;
      font-size: 22px;
    }

    .form-header p {
      margin: 5px 0 0;
      font-size: 14px;
      opacity: 0.9;
    }

    .form-body {
      padding: 25px;
    }

    .form-group {
      margin-bottom: 18px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 14px;
      color: #333;
    }

    input {
      width: 90%;
      padding: 10px 12px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
      transition: border-color 0.2s ease;
    }

    input:focus {
      border-color: #276ef1;
    }

    .submit-btn {
      width: 100%;
      background-color: #276ef1;
      color: white;
      border: none;
      padding: 12px;
      font-size: 15px;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #1557d1;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <div class="form-header">
      <h2>Cloud Computing 2025</h2>
      <p>Registration Form</p>
    </div>
    <div class="form-body">
      <form action="/register" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
          <label for="email">Student Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your student email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Create a secure password" required>
        </div>

        <div class="form-group">
          <label for="confirm">Confirm Password</label>
          <input type="password" id="confirm" name="password_confirmation" placeholder="Confirm your password" required>
        </div>

        <div class="form-group">
          <label for="birthdate">Birthdate</label>
          <input type="date" id="birthdate" name="birthdate" required>
        </div>

        <button type="submit" class="submit-btn">Register for Cloud Computing 2025</button>
      </form>
    </div>
  </div>

</body>
</html>
