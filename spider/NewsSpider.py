# 导入所需模块
import requests
from lxml import etree
from bs4 import BeautifulSoup
import csv
import time
import random

# 随机给出请求头中的 user-agent
# 模拟多个 user-agent，随机选取 list 中的一个
user_agents = [
    "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; AcooBrowser; .NET CLR 1.1.4322; .NET CLR 2.0.50727)",
    "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Acoo Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506)",
    "Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.35; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)",
    "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
    "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
    "Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 1.0.3705; .NET CLR 1.1.4322)",
    "Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.2; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.0.04506.30)",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.3 (Change: 287 c9dfb30)",
    "Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070215 K-Ninja/2.1.1",
    "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/20080705 Firefox/3.0 Kapiko/3.0",
    "Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070322 Kazehakase/0.4.5",
    "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko Fedora/1.9.0.8-1.fc10 Kazehakase/0.5.6",
    "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.20 (KHTML, like Gecko) Chrome/19.0.1036.7 Safari/535.20",
    "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; fr) Presto/2.9.168 Version/11.52",
]
# 完成随机选取 user-agnet，实现 反 反爬 操作
request_headers = {
    'user-agent': random.choice(user_agents),
    'Connection': "keep-alive",
    'Referer': 'https://search.cctv.com/'
}


# csv_writer.writerow(['标题', '时间','链接','图片', '内容'])
def get_news_info(url):
    web_data = requests.get(url=url, headers=request_headers)
    status_code = web_data.status_code
    if status_code == 200:
        html_text = web_data.content.decode('utf-8', errors='ignore')
        # 解析为 soup 文档
        soup = BeautifulSoup(html_text, 'html.parser')
        divs = soup.find_all("div", class_="tright")
        # 解析原文链接
        for div in divs:
            # 链接
            link = div.find('h3', class_='tit').find('span').get('lanmu1')
            # 图片链接
            img = div.find('p', class_='bre').find('img').get('src')
            # 文章标题
            title = div.find('h3', class_='tit').find('a').get_text()
            # 时间
            time_raw = div.find('div', class_='src-tim').get_text().strip()
            # 使用切片提取时间部分
            start_index = time_raw.find('发布时间：') + len('发布时间：')
            time_only = time_raw[start_index:].strip()
            # 内容
            content = get_news_content(link)
            csv_writer.writerow([title, time_only, link, img, content])


def get_news_content(home_href):
    web_data = requests.get(url=home_href, headers=request_headers, )
    status_code = web_data.status_code
    if status_code == 200:
        html_text = web_data.content.decode('utf-8', errors='ignore')
        # 使用 lxml 解析为 XPath 可定位的树状文档
        print(home_href)
        soup = BeautifulSoup(html_text, 'html.parser')
        div = soup.find("div", class_="content_area")  # 否则text_area
        if div:
            content = div.get_text()
        else:
            div = soup.find("div", class_="text_area")
            content = div.get_text()
        return content


# 声明主程序入口
if __name__ == '__main__':
    urls = [
        'https://search.cctv.com/search.php?qtext=%E6%A0%B8%E6%B1%A1%E6%9F%93&sort=relevance&type=web&vtime=&datepid' \
        '=1&channel=&page={}'.format(str(no)) for no in range(1, 4, 1)]

    # 创建CSV文件并写入标题行
    csv_file = open('新闻.csv', 'w', newline='', encoding='utf-8')
    csv_writer = csv.writer(csv_file)
    csv_writer.writerow(['标题', '时间', '链接', '图片', '内容'])

    # 遍历每一个列表页，调用方法，获取列表页中的信息
    num = 1
    for url in urls:
        print(url)
        get_news_info(url)
        time.sleep(0.5)
        num = num + 1
        # time.sleep(0.5)

    # 关闭CSV文件
    csv_file.close()
    print("新闻END...")
