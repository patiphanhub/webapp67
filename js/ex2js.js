const random_Number_In_Range = (min, max) => 
    Math.random() * (max - min) + min;

// Example usage
console.log(random_Number_In_Range(2, 10)); // might output a number between 2 and 10
console.log(random_Number_In_Range(1, 5));  // might output a number between 1 and 5
