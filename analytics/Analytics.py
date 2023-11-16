import mysql.connector as mysql
import tkinter as tk
from tkinter import ttk
from tkcalendar import Calendar

import matplotlib.pyplot as plt
from collections import Counter
from datetime import datetime, timedelta

databaseConfig = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'website_data'
}

connection = mysql.connect(**databaseConfig)

cursor = connection.cursor()

def get_data():
    start_date = cal_start.get_date()
    end_date = cal_end.get_date()

    query = "SELECT date FROM form_responses WHERE date BETWEEN %s AND %s"
    cursor.execute(query, (start_date, end_date))
    results = [data[0] for data in cursor.fetchall()]

    plot_data(start_date, end_date, results)

def plot_data(start_date, end_date, results):
    # Convert start_date and end_date strings to datetime objects
    start_date = datetime.strptime(start_date, '%Y-%m-%d')
    end_date = datetime.strptime(end_date, '%Y-%m-%d')

    # Create a list of all dates between start_date and end_date
    all_dates = [start_date + timedelta(days=x) for x in range((end_date - start_date).days + 1)]
    all_dates_str = [date.strftime('%Y-%m-%d') for date in all_dates]

    # Count the occurrences of each date
    date_counts = Counter(results)

    # Fill in missing dates with zero counts
    counts_filled = [date_counts[date] if date in date_counts else 0 for date in all_dates_str]

    # Extract dates and counts for plotting
    dates = all_dates_str
    counts = counts_filled

    # Plotting the histogram
    plt.bar(dates, counts, align='center', alpha=0.7)
    plt.xlabel('Date')
    plt.ylabel('Count')
    plt.title('Histogram of Results per Day')
    plt.xticks(rotation=45, ha='right')  # Rotate x-axis labels for better readability
    plt.tight_layout()  # Adjust layout for better appearance
    plt.show()


# Create main window
root = tk.Tk()
root.title("Date Range Selector")

# Create and place Calendar for Start Date
cal_start_label = tk.Label(root, text="Select Start Date:")
cal_start_label.grid(row=0, column=0, padx=10, pady=10, sticky=tk.W)

cal_start = Calendar(root, selectmode="day", date_pattern="yyyy-mm-dd")
cal_start.grid(row=0, column=1, padx=10, pady=10)

# Create and place Calendar for End Date
cal_end_label = tk.Label(root, text="Select End Date:")
cal_end_label.grid(row=1, column=0, padx=10, pady=10, sticky=tk.W)

cal_end = Calendar(root, selectmode="day", date_pattern="yyyy-mm-dd")
cal_end.grid(row=1, column=1, padx=10, pady=10)

# Create and place button to show selected dates
show_button = ttk.Button(root, text="Show Selected Dates", command=get_data)
show_button.grid(row=2, column=0, columnspan=2, pady=10)

# Create and place label to display selected dates
result_label = tk.Label(root, text="Selected Date Range: ")
result_label.grid(row=3, column=0, columnspan=2, pady=10)

# Run the GUI
root.mainloop()