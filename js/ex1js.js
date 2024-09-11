const matches = (obj, source) => 
    Object.keys(source).every(key => 
        obj.hasOwnProperty(key) && obj[key] === source[key]
    );

// Example usage
const obj1 = { name: "Pati", age: 21, city: "Bangkok" };
const obj2 = { age: 21, city: "Bangkok" };

console.log(matches(obj1, obj2)); // true

const obj3 = { age: 21, city: "Chiang Mai" };

console.log(matches(obj1, obj3)); // false
