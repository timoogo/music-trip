<template>
    <ul>
        <li>Paris</li>
        <li>La Rochelle</li>
        <li>Nantes</li>
        <li>Lille</li>
        <li>Paris</li>
        <li>Paris</li>
        <li>Paris</li>
        <li>Paris</li>
        <li>Paris</li>
        <li>Paris</li>
        <li>Paris</li>
    </ul>
</template>

<script>
export default {
name: "CitiesStep"
}
</script>

<style scoped lang="scss">
    ul{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 100%;
        padding: 3rem;
        color:#fff ;
        font-size: 20px;
        & li{

            &:hover{
                color: #000;
                text-align: center;
                background-color: #fff;
                clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);
                padding: .5rem 2.8rem .5rem 1rem !important;
                width: 50%;
            }
        }
        & li:nth-child(4) ~ li{
            display: none;
        }
    }
</style>
