function solveClasses() {
    class Pet {
        constructor(owner, name) {
            this.owner = owner;
            this.name = name;
            this.comments = [];
        }

        addComment(comment) {
            if(this.comments.includes(comment)) {
                throw "This comment is already added!";
            }
            this.comments.push(comment);
            return "Comment is added.";
        }

        feed() {
            return `${this.name} is fed`;
        }

        toString() {
            let message = `Here is ${this.owner}'s pet ${this.name}.\n`;
            if(this.comments.length > 0) {
                message += `Special requirements:`;
                for(let i = 0; i < this.comments.length; i++) {
                    if(this.comments.length - 1 !== i) {
                        message += ` ${this.comments[i]},`;
                    } else {
                        message += ` ${this.comments[i]}`;
                    }
                }
            }
            return message;
        }
    }

    class Cat extends Pet{
        constructor(owner, name, insideHabits, scratching) {
            super(owner, name);
            this.insideHabits = insideHabits;
            this.scratching = scratching;
        }

        feed() {
            let newMessage = super.feed();
            newMessage += ", happy and purring.";
            return newMessage;
        }

        toString() {
            let newMessage = super.toString();
            newMessage += `\nMain information:\n${this.name} is a cat with ${this.insideHabits}`;
            if(this.scratching) {
                newMessage += ", but beware of scratches.";
            }
            return newMessage;
        }
    }

    class Dog extends Pet {
        constructor(owner, name, runningNeeds, trainability) {
            super(owner, name);
            this.runningNeeds = runningNeeds;
            this.trainability = trainability;
        }

        feed() {
            let newMessage = super.feed();
            newMessage += ", happy and wagging tail.";
            return newMessage;
        }

        toString() {
            let newMessage = super.toString();
            newMessage += `\nMain information:\n${this.name} is a dog with need of ${this.runningNeeds}km running every day and ${this.trainability} trainability.`;
            return newMessage;
        }
    }

    return {
        Pet,
        Cat,
        Dog
    }
}


