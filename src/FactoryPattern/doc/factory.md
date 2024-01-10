# Factory Pattern

## Type

This design pattern is of the : Creation.

## How does it work, basically ?

*More information from* [Refactoring Guru](https://refactoring.guru/fr/design-patterns/factory-method)

### Problem

You have an application in which there can only be ordinary users, no different from others, until you realize that your application needs to be managed by administrators in order to moderate certain people who are not quite correct in their comments.

However, if you only have one class to create users, then all the logic will be in that class. If you decide to add one or more new user types, your application's code will grow until it's hard to understand.


### Resolution

The advantage of the Factory design pattern is that you can create different user types according to different classes, which can be similar to context classes. These will enable you to have a logic linked only to the selected context. If you need to create an administrator or a lambda user, then the logic isn't necessarily the same, so we decouple the code with factories. This also means you can create several in a row without having to rewrite all the logic each time.
