// ตัวอย่างข้อมูลผู้ใช้งานที่มีอยู่แล้ว
const existingUsers = ['user123', 'admin', 'maid1'];

// การเลือกประเภทผู้ใช้
function selectRole(role) {
    if (role === 'user' || role === 'maid') {
        document.getElementById('user-select').style.display = 'none';
        document.getElementById('login').style.display = 'block';
    }
}

// ฟังก์ชันเข้าสู่ระบบ
function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // ตรวจสอบความถูกต้อง (ในตัวอย่างจะยืนยันด้วยการใช้รหัสผ่านเป็น "password")
    if (username && password === 'password') {
        alert('เข้าสู่ระบบสำเร็จ');
    } else {
        document.getElementById('login-error').style.display = 'block';
    }
}

// แสดงหน้าลงทะเบียน
function showRegistration() {
    document.getElementById('login').style.display = 'none';
    document.getElementById('register').style.display = 'block';
}

// ฟังก์ชันลงทะเบียน
function register() {
    const regUsername = document.getElementById('reg-username').value;
    const regPassword = document.getElementById('reg-password').value;

    // ตรวจสอบว่าชื่อผู้ใช้ซ้ำหรือไม่
    if (existingUsers.includes(regUsername)) {
        document.getElementById('register-error').style.display = 'block';
    } else {
        alert('สมัครสมาชิกสำเร็จ');
        existingUsers.push(regUsername);  // เพิ่มชื่อผู้ใช้ใหม่
        document.getElementById('register-error').style.display = 'none';
        document.getElementById('register').style.display = 'none';
        document.getElementById('login').style.display = 'block';
    }
}
