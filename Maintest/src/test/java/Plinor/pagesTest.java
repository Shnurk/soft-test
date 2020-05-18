package Plinor;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.Select;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.Test;

import java.util.Random;

public class pagesTest {
    @Test
    public void errorassert() throws InterruptedException {

        System.setProperty("webdriver.chrome.driver", "src/main/resources/drivers/chromedriver.exe");
        WebDriver driver = new ChromeDriver();
        driver.get("http://f0409849.xsph.ru/public_html/main");
        //driver.findElement(By.cssSelector("[href=\"/public_html/main\"]")).click();
        WebDriverWait wait = new WebDriverWait(driver,10);

        Thread.sleep(3000);
        driver.findElement(By.cssSelector("[class=\"fas fa-sign-in-alt\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"background\"]")));
        driver.findElement(By.cssSelector("[name=\"login\"]")).sendKeys("admin");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"password\"]")).sendKeys("admin");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[href=\"/public_html/list/user\"]")));

        driver.findElement(By.cssSelector("[href=\"/public_html/list/user\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-plus-circle\"]")));
        Thread.sleep(2000);
        driver.findElement(By.cssSelector("[class=\"fas fa-plus-circle\"]")).click();

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[name=\"r_name[]\"]")));
        driver.findElement(By.cssSelector("[name=\"r_name[]\"]")).sendKeys("test_name");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"r_surname[]\"]")).sendKeys("test_surname");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"r_secname[]\"]")).sendKeys("test_secname");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"email[]\"]")).sendKeys("test_email");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"type[]\"]")).click();
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[value=\"4\"]")).click();
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();



        driver.findElement(By.cssSelector("[href=\"/public_html/list/user\"]")).click();
        Thread.sleep(1000);
        driver.get("http://f0409849.xsph.ru/plinor/cabinet/view/29");
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-eye\"]")));
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[class=\"fas fa-eye\"]")).click();
        String login =new String();
        String password =new String();
        Thread.sleep(2000);
        login=driver.findElement(By.cssSelector("[name=\"login\"]")).getAttribute("value");
        password=driver.findElement(By.cssSelector("[name=\"password\"]")).getAttribute("value");

        driver.findElement(By.cssSelector("[class=\"fas fa-sign-out-alt\"]")).click();

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"background\"]")));
        Thread.sleep(2000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"ent_atten\"]")));

        driver.findElement(By.cssSelector("[name=\"login\"]")).sendKeys("admin");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"ent_atten\"]")));

        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"password\"]")).sendKeys("admin");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"ent_atten\"]")));

        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"login\"]")).sendKeys("admin");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"password\"]")).sendKeys("adfgfg");
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"ent_atten\"]")));

        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"login\"]")).sendKeys(login);
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"password\"]")).sendKeys(password);
        Thread.sleep(3000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();

        Thread.sleep(1000);
        driver.get("http://f0409849.xsph.ru/plinor/cabinet/view/29");
        Thread.sleep(3000);
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-user-edit\"]")));
        driver.findElement(By.cssSelector("[class=\"fas fa-user-edit\"]")).click();
        Thread.sleep(3000);
        driver.findElement(By.cssSelector("[name=\"mail\"]")).clear();
        driver.findElement(By.cssSelector("[name=\"mail\"]")).sendKeys("mailtest@mail.mail");
        Thread.sleep(2000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        Thread.sleep(2000);



        driver.findElement(By.cssSelector("[href=\"/public_html/list/user\"]")).click();
        Thread.sleep(2000);
        driver.get("http://f0409849.xsph.ru/plinor/cabinet/view/2");

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-user-edit\"]")));
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[class=\"fas fa-user-edit\"]")).click();
        Thread.sleep(2000);
        driver.findElement(By.cssSelector("[name=\"mail\"]")).clear();
        Thread.sleep(1000);
        driver.findElement(By.cssSelector("[name=\"mail\"]")).sendKeys("mailmail@mail.mail");
        Thread.sleep(2000);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        Thread.sleep(2000);




        driver.get("http://f0409849.xsph.ru/public_html/main");
        Thread.sleep(3000);
        driver.findElement(By.cssSelector("[href=\"/public_html/article/index/7\"]")).click();
        Thread.sleep(8000);



        driver.findElement(By.cssSelector("[href=\"/public_html/list/tech\"]")).click();
        Thread.sleep(1500);

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-plus-circle\"]")));
        driver.findElement(By.cssSelector("[class=\"fas fa-plus-circle\"]")).click();
        Thread.sleep(1500);
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[name=\"iid[]\"]")));
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"iid[]\"]")).sendKeys("test_IN");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"md[]\"]")).sendKeys("test_md");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"cm[]\"]")).sendKeys("test_cm");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"sid[]\"]")).sendKeys("test_sid");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"cond[]\"]")).sendKeys("test_cond");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"opt[]\"]")).sendKeys("");
        driver.findElement(By.cssSelector("[name=\"storage[]\"]")).sendKeys("test_sid");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"work[]\"]")).click();
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[value=\"0\"]")).click();
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"amount[]\"]")).sendKeys("2");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();

        driver.findElement(By.cssSelector("[href=\"/public_html/list/tech\"]")).click();
        Thread.sleep(3000);

        driver.get("http://f0409849.xsph.ru/public_html/article/index/29");
        Thread.sleep(3000);

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[src=\"/pic/orig/pencil.png\"]")));
        driver.findElement(By.cssSelector("[src=\"/pic/orig/pencil.png\"]")).click();
        Thread.sleep(3000);
        driver.findElement(By.cssSelector("[name=\"opt\"]")).clear();
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"opt\"]")).sendKeys("test_cond");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[src=\"/pic/orig/plus.png\"]")).click();
        Thread.sleep(5000);

        driver.get("http://f0409849.xsph.ru/public_html/main");
        Thread.sleep(3000);
        driver.get("http://f0409849.xsph.ru/public_html/main/them/1");
        Thread.sleep(3000);
        driver.get("http://f0409849.xsph.ru/public_html/main/them/2");
        Thread.sleep(3000);
        driver.get("http://f0409849.xsph.ru/public_html/main/them/3");
        Thread.sleep(3000);
        driver.get("http://f0409849.xsph.ru/public_html/main/them/4");
        Thread.sleep(3000);



        driver.findElement(By.cssSelector("[class=\"fas fa-sign-out-alt\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"background\"]")));
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"login\"]")).sendKeys("admin");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"password\"]")).sendKeys("admin");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-envelope\"]")));
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[class=\"fas fa-envelope\"]")).click();

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[name=\"search\"]")));
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"search\"]")).sendKeys("moder");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"start_search\"]")).click();
        Thread.sleep(1500);
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[name=\"message\"]")));
        driver.findElement(By.cssSelector("[name=\"message\"]")).clear();
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"message\"]")).sendKeys("test_message");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[type=\"submit\"]")).click();

        driver.findElement(By.cssSelector("[class=\"fas fa-sign-out-alt\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"background\"]")));
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"login\"]")).sendKeys("moder");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"password\"]")).sendKeys("moder");
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[name=\"submit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"fas fa-envelope\"]")));
        Thread.sleep(1500);
        driver.findElement(By.cssSelector("[class=\"fas fa-envelope\"]")).click();
        Thread.sleep(5000);

        //driver.quit();


    }
}
