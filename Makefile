# Variables
RECTOR=vendor/bin/rector
PHPSTAN=vendor/bin/phpstan

# Execution
.PHONY: cover factory decorator strategy

cover:
	$(RECTOR) process src && $(PHPSTAN) analyse -c phpstan.neon

factory:
	php src/FactoryPattern/App.php
decorator:
	php src/DecoratorPattern/App.php
strategy:
	php src/StrategyPattern/App.php

