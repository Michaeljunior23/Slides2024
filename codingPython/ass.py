# Student Grade Calculator Program

# Step 1: Accept user input
name = input("Enter student's name: ")
age = int(input("Enter student's age: "))
score1 = float(input("Enter Test Score 1: "))
score2 = float(input("Enter Test Score 2: "))
score3 = float(input("Enter Test Score 3: "))

# Step 2: Calculate average
average = (score1 + score2 + score3) / 3

# Step 3: Determine pass/fail
if average >= 50:
    status = "PASSED"
else:
    status = "FAILED"

# Step 4: Print summary
print("\n--- Student Summary ---")
print(f"Name: {name}")
print(f"Age: {age}")
print(f"Average Score: {average:.2f}")
print(f"Status: {status}")