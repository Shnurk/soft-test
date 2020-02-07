package Plinor;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.Test;

import java.util.Random;

public class pagesTest {
    @Test
    public void errorassert() throws InterruptedException {

        System.setProperty("webdriver.chrome.driver", "src/main/resources/drivers/chromedriver.exe");
        WebDriver driver = new ChromeDriver();
        driver.get("http://127.0.0.1/plinor/");
        driver.findElement(By.cssSelector("[href=\"/plinor/main\"]")).click();
        WebDriverWait wait = new WebDriverWait(driver,10);
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"biggest_soft_new\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/main/them/actual\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"biggest_soft_new\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/main/them/power\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"biggest_soft_new\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/main/them/lev\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"biggest_soft_new\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/main/them/games\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"biggest_soft_new\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/cabinet/view/id\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"error\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/mail\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"error\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/history\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"error\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/list/order\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"error\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/list/tech\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"error\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/list/user\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[class=\"error\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/enter\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[type=\"submit\"]")));

        driver.findElement(By.cssSelector("[href=\"/plinor/enter/exit\"]")).click();
        wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("[type=\"submit\"]")));
        driver.quit();
    }
}
