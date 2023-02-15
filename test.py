
from turtle import Screen, Turtle

def triangle():
    for _ in range(3):
        turtle.forward(50)
        turtle.right(360/3)

def square():
    for _ in range(4):
        turtle.forward(50)
        turtle.right(360/4)

def circle():
    turtle.circle(-50/2)  # radius of 25, drawn clockwise

screen = Screen()

turtle = Turtle()
turtle.shape('turtle')

while True:
    answer = screen.textinput("Shape you desire", "triangle, square, or circle (Must be lowercase)?")

    turtle.clear()

    if answer == 'triangle':
        triangle()
    elif answer == 'square':
        square()
    elif answer == 'circle':
        circle()
    else:
        break

screen.bye()

































