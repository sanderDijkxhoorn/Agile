// Create a person class with the following properties:
// name: string
// age: number
// With the following methods:
// introduce: prints out a sentence with the name and age of the person.
// getAge: returns the age of the person.

class Person {
    // properties
    #name;
    #age;

    constructor(name, age) {
        // create a person with the given name and age
        this.#name = name;
        this.#age = age;
    }

    introduce() {
        // print out a sentence with the name and age of the person
        console.log(`My name is ${this.#name} and I am ${this.#age} years old.`);
    }

    getAge() {
        // return the age of the person
        return this.#age;
    }

    getDeathAge() {
        // 84 age is max age of a person and return the age of the person when he/she dies
        return 84 - this.#age;
    }

    getName() {
        // return the name of the person
        return this.#name;
    }
}

// Create a new instance of the person class and call the introduce method.
let person = new Person('John', 30);

// Introduce the person.
person.introduce();

// Show when person dies.
console.log(`${person.getName()} will die in ${person.getDeathAge()} years.`);