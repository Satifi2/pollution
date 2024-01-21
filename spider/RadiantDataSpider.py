import os
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains
import csv
import time

chromedriver_path = r'C:\Users\123\Desktop\chromedriver.exe'  # 驱动程序的路径


def get_info(url):
    # 创建Chrome浏览器对象，并指定ChromeDriver的路径
    chrome_options = Options()
    chrome_options.add_argument(f"webdriver.chrome.driver={chromedriver_path}")

    try:
        driver = webdriver.Chrome(options=chrome_options)
        print("创建成功")
    except Exception as e:
        print(f"无法创建Chrome浏览器对象：{e}")
        return

    try:
        # 打开网页
        driver.get(url)
        # 等待一些时间以确保页面加载完成
        time.sleep(2)

        # 找到并点击同意按钮
        agree_button = driver.find_element(By.CLASS_NAME, 'btn-primary2')
        agree_button.click()
        # 等待一些时间以确保页面加载完成
        time.sleep(1)

        # 找到并点击查找按钮
        find_button1 = driver.find_element(By.XPATH, '//*[@id="mapchoosemenudiv"]/div/div/a[3]')
        find_button1.click()
        time.sleep(2)

        # 再次点击查找按钮
        find_button2 = driver.find_element(By.XPATH, '//*[@id="provinceinfo"]/div[2]/div/div/div/div[2]/a')
        find_button2.click()
        time.sleep(2)

        # 开始爬取数据
        # 找到表格中的所有行
        rows = driver.find_elements(By.CSS_SELECTOR, 'table.gislisttable tbody tr')
        for row in rows:
            # 提取每一行的数据
            point_name = row.find_element(By.CSS_SELECTOR, 'td:nth-of-type(1)').text
            monitoring_time = row.find_element(By.CSS_SELECTOR, 'td:nth-of-type(2)').text
            hour_value = row.find_element(By.CSS_SELECTOR, 'td:nth-of-type(3)').text
            # 将数据写入CSV文件
            csv_writer.writerow([point_name, monitoring_time, hour_value])


    finally:
        # 关闭浏览器
        csv_file.close()
        driver.quit()


# 创建CSV文件并写入标题行
csv_file = open('辐射数据.csv', 'w', newline='', encoding='utf-8')
csv_writer = csv.writer(csv_file)
csv_writer.writerow(['站点', '时间', '小时量'])

url_to_capture = "https://data.rmtc.org.cn/gis/PubIndex.html"

# 调用take_screenshot方法
get_info(url_to_capture)
