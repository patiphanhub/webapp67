function digitize(n) {
    return [...`${Math.abs(n)}`].map(i => parseInt(i));
  }
  
  // ตัวอย่างการใช้งาน
  console.log(digitize(123));  // Output: [1, 2, 3]
  console.log(digitize(-456)); // Output: [4, 5, 6]
  console.log(digitize(7890)); // Output: [7, 8, 9, 0]
  