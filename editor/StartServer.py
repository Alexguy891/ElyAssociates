import subprocess
import webbrowser
import time

# Path to XAMPP control script
xampp_path = r'C:\xampp\xampp_control.exe'

# Start XAMPP
subprocess.Popen([xampp_path, 'start'])

# Wait for XAMPP to start (adjust the sleep time if needed)
time.sleep(10)

# Open the default browser to the specified URL
url = 'http://localhost/ElyAssociates/pages'
webbrowser.open(url)
