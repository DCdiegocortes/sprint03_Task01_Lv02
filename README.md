# SOLID Principles in PHP

Practical exercises and refactoring examples applying SOLID principles in PHP.

This repository contains exercises focused on clean architecture, object-oriented programming, low coupling, high cohesion, and maintainable code using modern PHP practices.

# 📚 Topics Covered

- Open/Closed Principle (OCP)
- Interfaces
- Polymorphism
- Encapsulation
- Strong typing with `strict_types`
- Clean code practices
- Low coupling
- High cohesion

# 🧱 Project Structure

## Sprint03 - Task01 - Level02

### Exercise 01 >>> OCP (Open/Closed Principle)

Refactoring of an instrument playing system.

### Applied Concepts

- Interface abstraction
- Polymorphism
- Encapsulation
- Extensibility
- Low coupling
- High cohesion
- Strong typing with `strict_types`

### Main Classes

- `Instrument`
- `InstrumentPlayer`
- `Guitar`
- `Drum`
- `Piano`

### Original Problem

The original solution was implemented using conditional statements inside a single class responsible for managing multiple instrument behaviors.

Every time a new instrument needed to be added, the main class had to be modified.

This violated the Open/Closed Principle.

### Refactoring Improvements

The code was refactored using interfaces and polymorphism.

A common contract was created through the `Instrument` interface, allowing every instrument to implement its own behavior independently.

The `InstrumentPlayer` class now works with abstraction instead of conditional statements.

Benefits achieved:

 Better readability  
 Lower coupling  
 Higher cohesion  
 Easier maintenance  
 Better scalability  
 Extensible architecture  
 Elimination of conditional complexity  
 Strong typing  

# OCP Implementation

Instead of depending on multiple conditional statements for every instrument type, the application now depends on abstraction and polymorphism.

This allows adding new instruments without modifying existing classes.

New implementations can be added easily while keeping the system closed for modification and open for extension.
  
# 📚 References

- Open/Closed Principle PHP Edition  
  https://medium.com/@ulysess/solid-principles-php-edition-today-open-closed-principle-896cbb3c8dce


