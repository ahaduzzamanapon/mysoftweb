import os
from PIL import Image

def compress_in_place(folder_path, quality=70):
    # Supported formats
    valid_extensions = ('.jpg', '.jpeg', '.png', '.webp')

    for filename in os.listdir(folder_path):
        if filename.lower().endswith(valid_extensions):
            file_path = os.path.join(folder_path, filename)

            try:
                # Open the image
                with Image.open(file_path) as img:
                    original_format = img.format
                    
                    # Handle transparency for JPG conversion (if applicable)
                    # Note: If you overwrite a PNG with JPG settings, 
                    # it stays a PNG but uses the compression logic.
                    if img.mode in ("RGBA", "P"):
                        img = img.convert("RGB")
                    
                    # Overwrite the original file
                    img.save(file_path, format=original_format, optimize=True, quality=quality)
                    
                print(f"Updated and compressed: {filename}")
            except Exception as e:
                print(f"Error processing {filename}: {e}")

# Usage
# Be careful: This replaces the files in this folder!
target_directory = './hero_image' 
compress_in_place(target_directory, quality=80)