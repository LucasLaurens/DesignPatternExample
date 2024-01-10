# Stragey Pattern

## Type

This design pattern is of the : Behavioral.

## How does it work, basically ?

*More information from* [Refactoring Guru](https://refactoring.guru/fr/design-patterns/strategy)

### Problem

You have an application where you can make oneshot purchases. Customers can pay by credit card. However, one day one of the customers asks to be able to pay via his Paypal account, which he finds more convenient.

The problem is that the more payment methods you add to the payment class, the larger it will become and the longer the conditions will be. What's more, it's going to be harder to reuse if you have to go back through this class every time, which embeds a lot of logic in order to be able to pay.

### Resolution

By using the Strategy design pattern, you can decouple the logic into several classes for different payment methods, and only have the logic for the desired payment method. If the customer selects Paypal, in this case the code will only fetch the logic linked to Paypal.

This avoids having all the logic in one place and spaghetti code with conditions within conditions. It also brings more context to your application, making it clearer and more comprehensible to future developers.
