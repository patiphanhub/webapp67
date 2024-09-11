const random_hex_color_code = () => {
    // สร้างเลขฐานสิบหกแบบสุ่ม 24 บิต โดยใช้ Math.random() และการเลื่อนบิต
    let n = (Math.random() * 0xffffff).toString(16);
    // เติม '0' ด้านหน้าให้ครบ 6 หลักถ้าจำเป็น และนำสัญลักษณ์ '#' มาข้างหน้า
    return '#' + n.padStart(6, '0');
  };
  
  console.log(random_hex_color_code());
  