# Strike

實作 php i18n

## Use

### 新增語系&語言檔

step1. 新增語系目錄

在`lang/`目錄下新增欲新增語系

```
# 新增西班牙語系
mkdir lang/spanish
```

step2. 新增語言檔

在`lang/<語系>/` 目錄下新增語系檔

```
# 新增西版牙語系檔
vi lang/spanish/string.php
```
並新增如下面格式內容

```
#  語系檔格式
$lang['lang'] = '語言';
$lang['test'] = '測試';
```

### 指定語系

透過Get方式，並以`l`作為參數進行語系指定

```
# 英文
http://localhost?l=en

# 繁體中文
http://localhost?l=en
```
