def encrypt(text, shift):
    result = ""

    for char in text:
        if char.isupper():
            result += chr((ord(char) + shift - 65) % 26 + 65)
        elif char.islower():
            result += chr((ord(char) + shift - 97) % 26 + 97)
        else:
            result += char  # Leave non-alphabet characters unchanged

    return result

def decrypt(text, shift):
    return encrypt(text, 26 - (shift % 26))  # Reverse the shift

# Main Program
if __name__ == "__main__":
    message = input("Enter your message: ")
    key = int(input("Enter shift key: "))

    encrypted = encrypt(message, key)
    decrypted = decrypt(encrypted, key)

    print("\nEncrypted Message:", encrypted)
    print("Decrypted Message:", decrypted)
